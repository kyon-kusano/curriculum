package com.example.security.springsecurity.account;

import java.util.List;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

//問２－１ リポジトリを作成するアノテーションを記述
//リポジトリークラスに設定します。このアノテーションが設定されると、クラスが DI コンテナへの登録対象としてマークされます。
//DIとはクラスからnew演算子を消せる、インスタンス化を一回で済ませられる（Singleton）
//[Spring Data JPA] 
//Repositoryインターフェースを作成し、アノテーションやメソッドを定義するだけでEntityの参照・更新を行えるようになる
@Repository
public interface AccountRepository extends CrudRepository<Account, Long> {
//	accountsテーブルよりusernameを元にレコードを検索し取得する
    public Account findByUsername(String username);
//  テーブル自体の取得（account）
    public List<Account> findAll();
}
