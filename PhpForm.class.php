<?
/*
Criada por Rodrigo Kulb em 15/04/2019
Objetivo é facilitar o desenvolvimento de formulários utilizando PHP.

URL da documentação completa em GITHUB no link abaixo
https://github.com/rodrigoKulb/phpForm

Video explicativo detalhando o desenvolvimento da class no meu canal
http://youtube.com/rodrigoKulb
*/

class PhpForm
{

	var $name;
	var $id;
	var $metodo;
	var $corpo;
		
	public function __construct()
    {
		$this->corpo = "<form action='' >";
	}
	public function addCampo($nomeCampo)
	{
		$this->corpo .= $nomeCampo."<input type='text'><br>";
	}
	public function criarForm()
	{
		print $this->corpo;
	}
}
?>