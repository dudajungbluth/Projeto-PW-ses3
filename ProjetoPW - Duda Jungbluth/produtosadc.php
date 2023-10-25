<?php

require "conectionprod.php";
header("Content-Type: application/json");



$nomeprod = $_POST["nome"];
$precoprod = $_POST["preco"];
$imgprod = $_POST["imagem"];

// insere produto
$sql = "INSERT INTO produtos (nome, preco, url) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$nomeprod, $precoprod, $imgprod]);

$output["status"] = "sucesso";
$output["message"] = "Produto cadastrado com sucesso.";
echo json_encode("$output");



// Seleciona e manda pro javascript pra ser adicionado na pagina 
