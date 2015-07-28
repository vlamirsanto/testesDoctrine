<?php
	require_once 'bootstrap.php';

	// Retornando uma catetoria por Id
	$categoria =$entityManager->find( 'Categoria', 7 );

	// Cadastrando um novo produto e informando a categoria
	$produto = new Produto();
	$produto->setNome( 'Testando cadastro de um produto' );
	$produto->setCategoria( $categoria ); // Setando o objeto categoria para cadastrar na categoria
	$entityManager->persist( $produto );
	$entityManager->flush();
	$idProduto = $produto->getId();

	// Retornando um produto pelo ID
	$produto = $entityManager->find( 'Produto', $idProduto );
	echo $produto->getId() . ' - ' . $produto->getNome() . ' - ' .  $produto->getCategoria()->getNome() . '<br /><br />';
?>