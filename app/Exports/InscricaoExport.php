<?php

namespace App\Exports;

use App\Models\SiInscricao;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class InscricaoExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        // Carrega as empresas com suas relações necessárias. Ajuste conforme necessário.
        return SiInscricao::with('user', 'user.ano', 'user.curso')->get();
    }

    public function headings(): array
    {
        // Cabeçalhos conforme sua tabela HTML
        return [
            'Tipo',
            'Nome aluno',
            'Email',
            'Ano',
            'Curso',
            'Download(CV)',
        ];
    }

    public function map($empresa): array
    {
        // Mapeamento dos dados para cada linha, ajuste de acordo com suas relações/necessidades
        return [
            $empresa->si->empresas . ' ' . $empresa->si->begin, // Ajuste conforme sua estrutura de dados
            $empresa->user->name,
            $empresa->user->email,
            $empresa->user->ano->designacao,
            $empresa->user->curso->designacao,
            'https://fista.iscte-iul.pt/storage/' . $empresa->user->file, // Ajuste o caminho conforme necessário
        ];
    }
}
