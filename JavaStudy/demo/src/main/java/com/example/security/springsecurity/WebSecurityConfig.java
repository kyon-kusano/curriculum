package com.example.security.springsecurity;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.security.crypto.password.PasswordEncoder;

import com.example.security.springsecurity.account.AccountService;

@EnableWebSecurity
public class WebSecurityConfig extends WebSecurityConfigurerAdapter {

	@Autowired
	private AccountService userService;

//	configure(HttpSecurity http) でHTTPセキュリティを有効にする
	@Override
	protected void configure(HttpSecurity http) throws Exception {
		http
//		認証されたユーザーの認証情報を返却
		.authorizeRequests()
//		指定したパスパターンに一致するリソースを適用対象にする|常にtrueを返却する（権限）
		.antMatchers("/login", "/login-error").permitAll()
//		指定したパスパターンに一致するリソースを適用対象にする|引数に指定したロールを保持している場合にtrueを返却する
		.antMatchers("/**").hasRole("USER")
		.and()
//		フォーム認証の適用
		.formLogin()
//		カスタムログインページへの遷移指定|カスタムログインページへの遷移不可時の遷移先指定
		.loginPage("/login").failureUrl("/login-error");
	}


	//変更点 ロード時に、「admin」ユーザを登録する。
	@Override
	protected void configure(AuthenticationManagerBuilder auth) throws Exception {
		auth
//		認証するユーザーを設定する
		.userDetailsService(userService)
//		パスワードをハッシュ化
		.passwordEncoder(passwordEncoder());

		if (userService.findAllList().isEmpty()) {
			userService.registerAdmin("admin", "secret", "admin@localhost");
			userService.registerManager("manager", "secret", "manager@localhost");
			userService.registerUser("user", "secret", "user@localhost");
		}
	}
	//変更点 PasswordEncoder(BCryptPasswordEncoder)メソッド
	@Bean
	public PasswordEncoder passwordEncoder() {
		//PasswordEncoderを実装した、パスワードのハッシュ化を提供しているクラス
		return new BCryptPasswordEncoder();
	}

}