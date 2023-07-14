<?php

namespace App\Http\Controllers;

use PDF;
use Barryvdh\Snappy\Facades\SnappyPdf;

use Illuminate\Http\Request;

class snapyPdfController extends Controller
{

    public function dowloadpdf()
    {
        // $html = '<html><body><h1>Hello, World!</h1></body></html>';


        // $pdf = \PDF::html($html);
        // return $pdf->download('document.pdf');

        $html = '<div class="template cv-roma active" data-template-color="dark" data-template-id="roma" style="min-height: 736.972px;">
    <div class="export_cv print" data-cv-print-area="" style="transform: scale(0.720403); height: 320.829px;">
        <div data-cv-step="step1_preview" class="sidebar">
            <span class="user-img hide">
                <img class="preview-avatar-img" src="" alt="Foto do perfil"></span>

            <div class="user-info">
                <span class="user-info-item user-info--email">Email
                    <span data-cv-preview-id="email">marcielle0644@gmail.com</span>
                </span>
                <span class="user-info-item user-info--telephone">Telefone Residêncial
                        <span data-cv-preview-id="telephone">88939396600</span>
                </span>
                <span class="user-info-item user-info--mobile" style="display: none;">Celular
                        <span data-cv-preview-id="mobile"></span>
                </span>
                <span class="user-info-item user-info--nationality">Nacionalidade
                    <span data-cv-preview-id="nationality">Brasileira</span>
                </span>
                <span class="user-info-item user-info--age" style="display: none;">Idade
                    <span><span data-cv-preview-id="age"></span> anos</span>
                </span>
                <span class="user-info-item user-info--gender" style="display: none;">Gênero
                    <span data-cv-preview-id="gender"></span>
                </span>
                <span class="user-info-item user-info--marital" style="display: none;">Estado Civil
                    <span data-cv-preview-id="marital"></span>
                </span>
                <span class="user-info-item user-info--address">Endereço
                    <span data-cv-preview-id="address">SOBRAL, SOBRAL</span>
                </span>
                <span class="user-info-item user-info--cep" style="display: none;">CEP
                    <span data-cv-preview-id="cep"></span>
                </span>
            </div>
        </div>
        <div class="main">
            <span class="user-info--name" data-cv-preview-id="name">Marcielle Jorge</span>
            <div data-cv-step="step1_2_preview" class="main-section" style="display: none;">
                <span class="main-section--title">Objetivo</span>
                <p data-cv-preview-id="career-goal" class="list-item list-item--large preview-career-goal"></p>
            </div>

            <div data-cv-step="step2_preview" class="main-section">
                <span data-cv-preview-id="academic" class="main-section--title academic-preview" style="display: none;">Formação acadêmica</span>
                <ul><li class="list-item--wrap academic-block-preview hide">
                        <div class="list-line">
                            <span class="sidebar-item academic-course">Curso</span>
                            <span class="list-item list-item--title preview-course"></span>
                        </div>

                        <div class="list-line">
                            <span class="sidebar-item academic-school">Instituição</span><p class="list-item preview-school academic-school"></p>
                        </div>

                        <div class="list-line">
                            <span class="sidebar-item academic-school_conclusion_year">Conclusão</span><p class="list-item preview-school_conclusion_year academic-school_conclusion_year"></p>
                        </div>
                    </li></ul>
<div class="no-break" style="display: none;">
                    <span class="main-section--subtitle">Qualificações e Cursos complementares</span>
                    <p data-cv-preview-id="other_courses" class="list-item list-item--large"></p>
                </div>
            </div>

            <div data-cv-step="step3_preview" class="main-section">
                <span data-cv-preview-id="experience" class="main-section--title" style="display: none;">Experiência</span>
                <ul><li class="list-item--wrap hide experience-block-preview">
                        <div class="list-line">
                            <span class="sidebar-item experience-company_office">Cargo</span>
                            <span class="list-item list-item--title preview-company_office"></span>
                        </div>

                        <div class="list-line">
                            <span class="sidebar-item experience-company">Empresa</span>
                            <p class="list-item preview-company"></p>
                        </div>

                        <div class="list-line">
                            <span class="sidebar-item experience-period">Período</span>
                            <p class="list-item preview-period"></p>
                        </div>

                        <div class="list-line">
                            <span class="sidebar-item experience-company_functions">Funções</span>
                            <p class="list-item preview-company_functions"></p>
                        </div>
                    </li></ul>
<div class="no-break" style="display: none;">
                    <span class="main-section--subtitle">Atividades complementares</span>
                    <p data-cv-preview-id="other_activity" class="list-item list-item--large"></p>
                </div>
            </div>

            <div data-cv-step="step4_preview" class="main-section">
                <div class="no-break" style="display: none;">
                    <span class="main-section--title">Informações adicionais</span>
                    <p data-cv-preview-id="other_informations" class="list-item list-item--large"></p>
                </div>
            </div>
        </div>
    </div>
</div>';
        $css = file_get_contents(public_path('css/index.css'));
        $htm = '<style>' . $css . '</style>' . '<body>' . $html . '</body>';
        var_dump($css);
        $pdf = \PDF::html($htm);
        return $pdf->download('document.pdf');
    }
}
