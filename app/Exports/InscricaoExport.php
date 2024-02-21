<?php

namespace App\Exports;

use App\Models\SiInscricao;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class InscricaoExport implements FromQuery, WithHeadings, WithMapping
{
    public function query()
    {
        // Certifique-se de ajustar a consulta conforme necessário para incluir todas as relações relevantes
        return SiInscricao::query()->with(['aluno', 'aluno.ano', 'aluno.curso']);
    }

    public function headings(): array
    {
        return [
            'Tipo',
            'Nome do Aluno',
            'Email',
            'Ano',
            'Curso',
            'Download CV',
        ];
    }

    public function map($inscricao): array
    {
        // Ajuste os acessos de propriedade conforme as relações e campos reais do seu modelo
        return [
            $inscricao->tipo, // Supondo que 'tipo' seja um campo diretamente no modelo SiInscricao
            $inscricao->aluno->name,
            $inscricao->aluno->email,
            $inscricao->aluno->ano->designacao,
            $inscricao->aluno->curso->designacao,
            $inscricao->aluno->file ? url('storage/'.$inscricao->aluno->file) : null, // Ajuste conforme a lógica de armazenamento do seu arquivo
        ];
    }
}
