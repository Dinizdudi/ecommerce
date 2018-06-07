<?php 

namespace Hcode;

class Model {

	private $values = [];

	public function __call($name, $args)
	{

		$method = substr($name, 0 , 3);
		$fieldName = substr($name, 3, strlen($name));

		switch($method)
		{
			case "get":
				return $this->values[$fieldName]; 
				// get -> retorna o valor do campo em questão.Ficaria tipo "return $this->values[iduser]" que vai retornar o valor do id do usuario que está logando
			break;

			case "set":
				$this->values[$fieldName] = $args[0];
				// set -> atribui o valor do campo em questão.Ficaria tipo "$this->values[iduser] = 1" já que o ARGS é o valor do campo que foi mandado pro __call
			break;
		}

	}

	public function setData($data = array())
	{
		foreach ($data as $key => $value) { //data são todos os campos que retornou, key é o nome do campo, e value é o valor do campo
			
			$this->{"set".$key}($value);

		}
	}

	public function getValues()
	{
		return $this->values;
	}

}

 ?>