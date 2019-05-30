@extends('templates.master')

@section('content.view')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>
                            <h1 class="display-4">Total em prêmios</h1>
                        </th>
                        <td class="text-right">
                            <h1 class="display-4 font-weight-bold">R$ 40.500,00</h1>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6">
                <!-- Prêmios Diamante -->
                <table class="table table-striped">
                    <thead class="bg-secondary text-white">
                    <tr>
                        <th scope="col" colspan="4">Diamante</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1º lugar - Geral</th>
                        <td class="text-right">R$ 4.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">2º lugar - Geral</th>
                        <td class="text-right">R$ 2.400,00</td>
                    </tr>
                    <tr>
                        <th scope="row">3º lugar - Geral</th>
                        <td class="text-right">R$ 1.600,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 1º turno</th>
                        <td class="text-right">R$ 1.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 2º turno</th>
                        <td class="text-right">R$ 1.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Time da fortuna</th>
                        <td class="text-right">R$ 500,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6">
                <!-- Prêmios Platina -->
                <table class="table table-striped">
                    <thead class="bg-secondary text-white">
                    <tr>
                        <th scope="col" colspan="4">Platina</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1º lugar - Geral</th>
                        <td class="text-right">R$ 3.500,00</td>
                    </tr>
                    <tr>
                        <th scope="row">2º lugar - Geral</th>
                        <td class="text-right">R$ 2.100,00</td>
                    </tr>
                    <tr>
                        <th scope="row">3º lugar - Geral</th>
                        <td class="text-right">R$ 1.400,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 1º turno</th>
                        <td class="text-right">R$ 900,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 2º turno</th>
                        <td class="text-right">R$ 900,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Time da fortuna</th>
                        <td class="text-right">R$ 400,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6">
                <!-- Prêmios Ouro -->
                <table class="table table-striped">
                    <thead class="bg-secondary text-white">
                    <tr>
                        <th scope="col" colspan="4">Ouro</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1º lugar - Geral</th>
                        <td class="text-right">R$ 3.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">2º lugar - Geral</th>
                        <td class="text-right">R$ 1.800,00</td>
                    </tr>
                    <tr>
                        <th scope="row">3º lugar - Geral</th>
                        <td class="text-right">R$ 1.200,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 1º turno</th>
                        <td class="text-right">R$ 800,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 2º turno</th>
                        <td class="text-right">R$ 800,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Time da fortuna</th>
                        <td class="text-right">R$ 300,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6">
                <!-- Prêmios Prata -->
                <table class="table table-striped">
                    <thead class="bg-secondary text-white">
                    <tr>
                        <th scope="col" colspan="4">Prata</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1º lugar - Geral</th>
                        <td class="text-right">R$ 2.500,00</td>
                    </tr>
                    <tr>
                        <th scope="row">2º lugar - Geral</th>
                        <td class="text-right">R$ 1.500,00</td>
                    </tr>
                    <tr>
                        <th scope="row">3º lugar - Geral</th>
                        <td class="text-right">R$ 1.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 1º turno</th>
                        <td class="text-right">R$ 700,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 2º turno</th>
                        <td class="text-right">R$ 700,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Time da fortuna</th>
                        <td class="text-right">R$ 200,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-6">
                <!-- Prêmios Bronze -->
                <table class="table table-striped">
                    <thead class="bg-secondary text-white">
                    <tr>
                        <th scope="col" colspan="4">Bronze</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1º lugar - Geral</th>
                        <td class="text-right">R$ 2.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">2º lugar - Geral</th>
                        <td class="text-right">R$ 1.200,00</td>
                    </tr>
                    <tr>
                        <th scope="row">3º lugar - Geral</th>
                        <td class="text-right">R$ 800,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 1º turno</th>
                        <td class="text-right">R$ 600,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Campeão do 2º turno</th>
                        <td class="text-right">R$ 600,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Time da fortuna</th>
                        <td class="text-right">R$ 100,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6">
                <!-- Outros Prêmios -->

                <!-- Prêmios Champions -->
                <table class="table table-striped">
                    <thead class="bg-secondary text-white">
                    <tr>
                        <th scope="col" colspan="4">Extras</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1º lugar - Champions</th>
                        <td class="text-right">R$ 0.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">2º lugar - Champions</th>
                        <td class="text-right">R$ 0.000,00</td>
                    </tr>
                    </tbody>
                </table>

                <!-- Prêmios Cup -->
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th scope="row">1º lugar - Copa</th>
                        <td class="text-right">R$ 600,00</td>
                    </tr>
                    <tr>
                        <th scope="row">2º lugar - Copa</th>
                        <td class="text-right">R$ 300,00</td>
                    </tr>
                    </tbody>
                </table>

                <!-- Maior pontuação do ano -->
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th scope="row">Mito de uma rodada</th>
                        <td class="text-right">R$ 100,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
