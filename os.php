<?php 
    $name = $_GET["name"];
    $id = $_GET["id"];
    $fantasy = $_GET["fantasy"];
    $date = $_GET["date"];
    $cpfcnpj = $_GET["cpfcnpj"];
    $email = $_GET["email"];
    $contact = $_GET["contact"];
    $person = $_GET["person"];
    $state = $_GET["state"];
    $city = $_GET["city"];
    $neighborhood = $_GET["neighborhood"];
    $street = $_GET["street"];
    $numberHouse = $_GET["numberHouse"];

    $qtd1 = $_GET["qtd1"];
    $description1 = $_GET["description1"];
    $valueUn1 = $_GET["valueUn1"];
    $value1 = $_GET["value1"];

    $qtd2 = $_GET["qtd2"];
    $description2 = $_GET["description2"];
    $valueUn2 = $_GET["valueUn2"];
    $value2 = $_GET["value2"];

    $qtd3 = $_GET["qtd3"];
    $description3 = $_GET["description3"];
    $valueUn3 = $_GET["valueUn3"];
    $value3 = $_GET["value3"];

    $qtd4 = $_GET["qtd4"];
    $description4 = $_GET["description4"];
    $valueUn4 = $_GET["valueUn4"];
    $value4 = $_GET["value4"];

    $qtd5 = $_GET["qtd5"];
    $description5 = $_GET["description5"];
    $valueUn5 = $_GET["valueUn5"];
    $value5 = $_GET["value5"];

    $qtd6 = $_GET["qtd6"];
    $description6 = $_GET["description6"];
    $valueUn6 = $_GET["valueUn6"];
    $value6 = $_GET["value6"];

    $qtd7 = $_GET["qtd7"];
    $description7 = $_GET["description7"];
    $valueUn7 = $_GET["valueUn7"];
    $value7 = $_GET["value7"];

    $qtd8 = $_GET["qtd8"];
    $description8 = $_GET["description8"];
    $valueUn8 = $_GET["valueUn8"];
    $value8 = $_GET["value8"];

    $qtd9 = $_GET["qtd9"];
    $description9 = $_GET["description9"];
    $valueUn9 = $_GET["valueUn9"];
    $value9 = $_GET["value9"];

    $qtd10 = $_GET["qtd10"];
    $description10 = $_GET["description10"];
    $valueUn10 = $_GET["valueUn10"];
    $value10 = $_GET["value10"];

    $result = $_GET["result"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OS | <?="$id $name"?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = { 
            theme: {
                extend: {
                colors: {
                    clifford: '#da373d',
                }
                },
                fontFamily: {
                        sans: ["Roboto", "sans-serif"],
                        body: ["Roboto", "sans-serif"],
                        mono: ["ui-monospace", "monospace"],
                    },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="js/scriptsphp.js"></script>
</head>
<body>
    <section class="max-w-6xl m-auto" id="content">
        <header>
            <div class="flex items-center justify-between ">
                <div class="flex-row">
                    <h1 class="text-bold uppercase">Consertel</h1>
                    <h2>Rua José de Alencar 151B Centro</h2>
                    <h2>Mossoró, RN</h2>
                    <h2>(84) 98864-3108</h2>
                    <h2>theodoro222@hotmail.com</h2>
                </div>
                <div class="flex h-14">
                    <img src="assets/consertel-logo.jpeg" alt="logo">
                </div>
            </div>
        </header>
        <main>
            <div class="flex justify-between">
                <div class="">
                    <h1>ORDEM DE SERVIÇO</h1>
                </div>
                <div>
                    <h1>OS N: *<?=$id?>*</h1>
                </div>
            </div>

            <div>
                <div class="flex flex-col">
                    <div class="inline-block w-full">
                        <table class="min-w-full border text-center text-sm border-neutral-500 mb-2">
                            <thead class="border-neutral-500">
                                <tr class="border-b border-neutral-500">
                                    <th scope="col" class="border-r border-neutral-500 w-32 uppercase">
                                        Cliente:
                                    </th>
                                    <th scope="col" class="text-center font-normal px-2 uppercase">
                                        <?=$name?>
                                    </th>
                                </tr>
                                <tr>
                                <th scope="col" class="border-r border-neutral-500 w-32 uppercase">
                                        Nome Fantasia:
                                    </th>
                                    <th scope="col" class="text-center border-r border-neutral-500 font-normal px-2 uppercase">
                                        <?=$fantasy?>
                                    </th>
                                    <th class="w-32 uppercase border-r border-neutral-500">
                                        Contato:
                                    </th>
                                    <th class="text-center font-normal px-2">
                                        <?=$contact?>
                                    </th>
                                </tr>
                            </thead>
                        </table>

                        <table class="min-w-full border text-center text-sm border-neutral-500 mb-2">
                            <thead class="border-neutral-500">
                                <tr class="border-b border-neutral-500">
                                    <th scope="col" class="border-r border-neutral-500 w-32 uppercase">
                                        Endereço:
                                    </th>
                                    <th scope="col" class="text-center font-normal px-2 uppercase">
                                        <?="$street Nº: $numberHouse"?>
                                    </th>
                                </tr>
                                <tr>
                                <th scope="col" class="border-r border-neutral-500 w-32 uppercase">
                                        Bairro:
                                    </th>
                                    <th scope="col" class="text-center border-r border-neutral-500 w-96 font-normal px-2 uppercase">
                                        <?="$neighborhood"?>
                                    </th>
                                    <th class="w-32 uppercase border-r border-neutral-500">
                                        Cidade:
                                    </th>
                                    <th class="text-center font-normal px-2 w-96">
                                        <?="$city - $state"?>
                                    </th>
                                </tr>
                            </thead>
                        </table>

                        <table class="min-w-full mb-2 border text-center text-sm border-black">
                            <thead class="border-neutral-500">
                                <tr class="border-b border-neutral-500">
                                    <th scope="col" class="border-r border-neutral-500 w-32 uppercase">
                                        CPF / CNPJ:
                                    </th>
                                    <th scope="col" class="text-center border-r border-neutral-500 font-normal px-2 uppercase">
                                        <?=$cpfcnpj?>
                                    </th>
                                    <th scope="col" class="border-r border-neutral-500 w-32 uppercase">
                                        Pessoa:
                                    </th>
                                    <th scope="col" class="border-r font-normal border-neutral-500 w-32 uppercase">
                                        <?="$person"?>
                                    </th>
                                    <th scope="col" class="border-r border-neutral-500 w-32 uppercase">
                                        E-mail:
                                    </th>
                                    <th scope="col" class="border-r font-normal border-neutral-500 w-96">
                                        <?="$email"?>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap items-center rounded-b-md border-t-2 border-neutral-100 mb-20">
                <div class="flex w-full flex-col">
                    <div class="inline-block">
                        <table class="w-full border text-center text-sm font-light border-black mb-2">
                            <thead class="border-b font-medium border-black">
                                <tr>
                                    <th scope="col" class="border-r border-black py-4">
                                    Qtd.
                                    </th>
                                    <th scope="col" class="border-r border-black py-4">
                                    Descrição
                                    </th>
                                    <th scope="col" class="border-r border-black py-4">
                                    Valor Un:
                                    </th>
                                    <th scope="col" class="py-4">
                                    Valor total:
                                    </th>
                                </tr>
                            </thead>
                            <!-- items 1 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-black border-r border-neutral-500">
                                        <?=$qtd1?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description1?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn1?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value1?>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- items 2 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-r border-black">
                                        <?=$qtd2?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description2?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn2?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value2?>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- items 3 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-r border-black">
                                        <?=$qtd3?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description3?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn3?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value3?>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- items 4 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-r border-black">
                                        <?=$qtd4?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description4?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn4?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value4?>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- items 5 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-r border-black">
                                        <?=$qtd5?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description5?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn5?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value5?>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- items 6 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-r border-black">
                                        <?=$qtd6?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description6?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn6?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value6?>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- items 7 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-r border-black">
                                        <?=$qtd7?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description7?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn7?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value7?>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- items 8 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-r border-black">
                                        <?=$qtd8?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description8?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn8?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value8?>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- items 9 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-r border-black">
                                        <?=$qt92?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description9?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn9?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value9?>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- items 10 -->
                            <tbody>
                                <tr class="border-b border-black h-7">
                                    <td class="w-20 whitespace-nowrap border-r border-black">
                                        <?=$qtd10?>
                                    </td>
                                    <td class="whitespace-nowrap border-r border-black uppercase">
                                        <?=$description10?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$valueUn10?>
                                    </td>
                                    <td class="w-28 whitespace-nowrap border-r border-black">
                                        <?=$value10?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </table>
                        <table class="min-w-full border text-center text-sm border-black">
                            <thead class="border-black">
                                <tr class="border-b border-black">
                                    <th scope="col" class="border-r border-black uppercase">
                                        total
                                    </th>
                                    <th scope="col" class="text-center border-r w-32 border-black font-normal px-2 uppercase">
                                        <?=$result?><span> R$</span>
                                    </th>
                                    
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex justfy-center w-full">
                <button onclick="downloadPDF()" class="bg-sky-700 text-white px-2 py-2 rounded-md text-center">Baixar em PDF</button>
            </div>
        </main>
    </section>
</body>
</html>