<?php
namespace Design\Patterns;
class Professor extends Usuario {
    public function autenticar(string $login, string $senha) {
       
        return true;
    }
    public function autorizar(): array {
      return ['acessar_materiais', 'gerenciar_notas'];
  }
  }