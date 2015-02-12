A aplicação em modo console está na pasta app/Console/Command/RobotShell.php

Para acessar o Console do CakePHP é necessário:

	Alguns comandos:

	- cd /path/to/cakephp/app
	- Console/cake

	Se o comando não for funcionar:

	Edite seu .bashrc or .bash_profile e adicione a seguinte linha:

	export PATH="$PATH:/path/to/cakephp/lib/Cake/Console"

	Então recarregue a configuração bash e abra um novo terminal.


A validação para a entrada de dados no banco de dados está em app/Model/Email.php e app/Model/Url.php.

A página web com a lista de email está na pasta app/View/Pages/home.ctp

O banco de dados está na pasta db/.