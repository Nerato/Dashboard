REFERÊNCIA
https://github.com/jeroennoten/Laravel-AdminLTE

MULTIPLAS CONEXÕES - BANCO DE DADOS

https://stackoverflow.com/questions/38886491/switch-db-connection-dynamically
https://laravel.com/docs/5.3/database#using-multiple-database-connections
http://fideloper.com/laravel-multiple-database-connections

Exempplo: 

'$users = DB::connection('mysql2')->select(...);'