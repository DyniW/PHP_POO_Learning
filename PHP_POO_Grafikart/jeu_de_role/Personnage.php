<?php

class Personnage
{
	private $vie = 10;
	private $atk = 20;
	private $nom;

	public function __construct($nom)
	{
		$this->nom = $nom;
	}

	public function crier()
	{
		echo "LEROY JENKINS";
	}

	public function regenerer($vie = null)//null est la valeur par défaut
	{
		if(is_null($vie))
		{
			$this->vie = 100;
		}
		else
		{
			$this->vie += $vie;
		}
	}

	public function mort()
	{
		return $this->vie <= 0;
	}

	private function propriete_vie()//test fonction private (vérifie que la vie ne passe pas en négatif)
	{
		if($this->vie < 0)
		{
			$this->vie = 0;
		}
	}

	public function attaque($cible)
	{
		$cible->vie -= $this->atk;
		$cible->propriete_vie();

		echo '<pre>';
			var_dump($cible);//affiche la nouvelle valeur du personage cible
		echo '</pre>';
	}


	//accesseurs

	public function getVie()
	{
		return $this->vie;
	}

	public function getAtk()
	{
		return $this->atk;
	}

	public function getNom()
	{
		return $this->nom;
	}


	//mutateurs

	public function setVie($vie)
	{
		$this->vie = $vie;
	}

	public function setAtk($atk)
	{
		$this->atk = $atk;
	}

	public function setNom($nom)
	{
		$this->nom = $nom;
	}
}