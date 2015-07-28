<?php
	require_once 'bootstrap.php';
	$categoria = new Categoria;

	// Incluindo uma nova categoria
	$categoria->setNome( 'Nova Categoria Inserida' );
	$entityManager->persist( $categoria );
	$entityManager->flush();
	$catId = $categoria->getId(); // Recupero o ID inserido
	echo "ID inserido: " . $catId . '<br /><br />';

	// Retornando uma categoria por ID
	$categoria = $entityManager->find( 'Categoria', $catId );
	echo $categoria->getId() . ' - ' . $categoria->getNome() . '<br /><br />';

	// Alterando o nome da categoria
	$update = $entityManager->find( 'Categoria', $catId );
	$update->setNome( 'Nome da categoria inserida alterada' );
	$entityManager->persist( $update );
	$entityManager->flush();

	// Retornando uma categoria por ID
	$categoria = $entityManager->find( 'Categoria', $catId );
	echo $categoria->getId() . ' - ' . $categoria->getNome() . '<br /><br />';

	// Retornando uma categoria pelo nome
	$categoria = $entityManager->getRepository( 'Categoria' )->findOneBy( array( 'nome' => 'Hardware' ) );
	echo $categoria->getId() . ' - ' . $categoria->getNome() . '<br /><br />';

	// Excluindo uma categoria
	$delete = $entityManager->find( 'Categoria', $catId );
	$entityManager->remove( $delete );
	echo 'ID Excluido: ' . $delete->getId() . ' - ' . $delete->getNome() . '<br /><br />';
	$entityManager->flush();
?>