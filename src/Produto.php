<?php
/**
 * Produto
 *
 * @Entity
 * @Table(name="produto")
 */
class Produto
{
	/**
	* @Id
	* @Column(type="integer", name="idProduto")
	* @GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @Column(type="string", name="nomeProduto")
	*/
	protected $nome;

	/**
	* @Column(type="integer", name="idCategoria")
	*/
	protected $idCategoria;

	/**
	* @ManytoOne(targetEntity="Categoria")
	* @JoinColumn(name="idCategoria", referencedColumnName="idCategoria")
	*/
	protected $categoria;

	public function getId()
	{
		return $this->id;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome( $nome )
	{
		$this->nome = $nome;
	}

	public function getIdCategoria()
	{
		return $this->idCategoria;
	}

	public function getCategoria()
	{
		return $this->categoria;
	}

	public function setCategoria( $categoria )
	{
		$this->categoria = $categoria;
	}
}