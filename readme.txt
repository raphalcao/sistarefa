Para executar a aplicação.

1 - Banco configurado em MySql, portanto, é necessário que acesse o arquivo Database, localizado em app\Config\Database.php e faça as alterações nas chaves correspondentes para acesso ao seu banco local.
2 - Crie o arquivo de base de dados no Mysql. Após criado, colocar o dbname no campo database, localizado no mesmo arquivo citado no tópico 1.
Ex: 'database' => 'db_tarefa',
3 - Rode o comando: php spark migrate
4 - Caso seu BD esteja configurado, a migrate criará a tabela e o relacionamento.
5 - Para rodar o sistema execute: php spark serve 
