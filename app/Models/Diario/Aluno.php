<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = [
        'aluno_nome',
        'aluno_codigo',
        'aluno_sexo',
        'aluno_cep',
        'aluno_cpf',
        'aluno_rg',
        'aluno_sus' ,
        'aluno_nasc',
        'aluno_nac',
        'aluno_nat',
        'aluno_uf_nasc',
        'aluno_uf_endereco',
        'aluno_uf_registro',
        'aluno_endereco',
        'aluno_bairro',
        'aluno_cidade',
        'aluno_prog_social',
        'aluno_nis',
        'aluno_prog_bpc',
        'aluno_celular',
        'aluno_registro_nasc',
        'aluno_fl',
        'aluno_livro' ,
        'aluno_comarca',
        'aluno_data_exped',
        'aluno_data_exped_reg',
        'aluno_raca',
        'aluno_deficiencia',
        'aluno_tipo_deficiencia',
        'aluno_transporte',
        'aluno_tipo_transporte',
        'aluno_id_escola'
    ];
    public function escola(){
        return $this->belongsTo(Escola::class); // Vai tentar encontrar uma coluna escola_id na tabela de aluno
    }
}
