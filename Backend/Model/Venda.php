<?php

namespace Backend\Model;

use PDO;

class Venda {
    
    private $id;
    private $idUsuarioVenda;
    private $idLugarVenda;
    private $idImgsVenda;
    private $insertDateTime;
    private $total;
    private $status;
    private $formaPagamento;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdUsuarioVenda() {
        return $this->idUsuarioVenda;
    }

    public function setIdUsuarioVenda($idUsuarioVenda) {
        $this->idUsuarioVenda = $idUsuarioVenda;
    }

    public function getIdLugarVenda() {
        return $this->idLugarVenda;
    }

    public function setIdLugarVenda($idLugarVenda) {
        $this->idLugarVenda = $idLugarVenda;
    }

    public function getIdImgsVenda() {
        return $this->idImgsVenda;
    }

    public function setIdImgsVenda($idImgsVenda) {
        $this->idImgsVenda = $idImgsVenda;
    }

    public function getInsertDateTime() {
        return $this->insertDateTime;
    }

    public function setInsertDateTime($insertDateTime) {
        $this->insertDateTime = $insertDateTime;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getFormaPagamento() {
        return $this->formaPagamento;
    }

    public function setFormaPagamento($formaPagamento) {
        $this->formaPagamento = $formaPagamento;
    }
}