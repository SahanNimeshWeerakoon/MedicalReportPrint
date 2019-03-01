<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="printview" id="printbtn">
        <a onclick="printView();" class="btn red" title="print button" target="_blank" id="printView">Print</a>
    </div>
    <div class="show-print-view" id="showPrint">
        <a onclick="showPrintView();" class="btn red" title="print view button" id="showprintbtn">Show Print View</a>
    </div>

    <div class="title speial-note container">
        <p>
            <b>Special Note: </b>
            {{ $report->special_notes }}
        </p>
    </div>

    <div class="view-report" id="print">
        <div class="top-three">
            <table>
                <tr>
                    <td>
                        <p class="top-round">
                            <span class="title">Serial no: </span> {{ $report->id }}
                        </p>
                    </td>
                    <td>
                        <p class="top-round">
                            <span class="title">To: </span>{{ $pendingReport->destination }}
                        </p>
                    </td>
                    <td>
                        <p class="top-round">
                            <span class="title">Date: </span> {{ date('Y-m-d') }}
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row top-personal">
            <div class="col m2 img-brd">
                <p class="image">
                    <img src="/storage/prof_image/{{ $pendingReport->image_url }}" alt="Photograph">
                </p>
            </div>
            <div class="col m10">
                <table>
                    <tr class="row">
                        <td colspan="2" class="col m12">
                            <span class="title">Full Name:</span> {{ $pendingReport->name }}
                        </td>
                    </tr>
                    <tr class="row">
                        <td colspan="2" class="col m12">
                            <span class="title">Address:</span> {{ $pendingReport->address }}
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col m10">
                            <span class="title">Recruiting Agency: </span> &nbsp;&nbsp;&nbsp;&nbsp; {{ $agency }}
                        </td>
                        <td class="col m2">
                            <span class="title">L L no: </span> {{ $pendingReport->llno }}
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col m10">
                            <span class="title">Passport no: </span> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{ $pendingReport->passport_no }}
                        </td>
                        <td class="col m2">
                            <span class="title">Place of issue: </span> {{ $pendingReport->place_of_issue }}
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col m10">
                            <span class="title">Position Applied for: </span> &nbsp;&nbsp;&nbsp;{{ $pendingReport->position_applied }}
                        </td>
                        <td class="col m2">
                            <span class="title">Age : </span> {{ $pendingReport->age }}
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col m10">
                            <span class="title">Nationality: </span> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{ $pendingReport->nationality }}
                        </td>
                        <td class="col m2">
                            <span class="title">Sex: </span> {{ $pendingReport->sex }}
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col m10">
                            <span class="title">Marital Status: </span> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{ $pendingReport->marital }}
                        </td>
                        <td class="col m2">
                            <span class="title">Height: </span> {{ $pendingReport->height }}
                            <span class="title">Weight: </span> {{ $pendingReport->weight }}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="history">
            <h6>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>Medical History: </b>
                History of any significant past illness:
            </h6>
            <p class="psychiatric">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                1.Psychiatric and neurological disorders ( Epilepsy, Depression, Schizophrenia )..... 2.Allerty....... 3. Others.....
            </p>
            <p class="ihereby">
                I hereby permit Neosys Meidicare and the udersigned physician to furnish such information the company may need pertaining 
                to my health status and other pertinent and medical findings and do hereby release them any and all legal responsibility 
                by doing so. I also certify that my medical hsitory contained above is true and any false statement will disqualify me 
                from my employement, benefit and claims.
            </p>
        </div>
        <div class="report row" style="width: 100%;">
            <div class="col m6" style="width: 50%;">
                <table>
                    <thead>
                        <tr class="medical">
                            <td colspan="2">
                                <p>
                                    MEDICAL EXAMINATION
                                </p>
                            </td>
                            <td>
                                <p>
                                    Results
                                </p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Generela Examination --}}
                        <tr>
                            <td rowspan="8">
                                <span class="title">Generale Examination</span>
                            </td>
                            <td>
                                <span class="title">Deformities</span>
                            </td>
                            <td>{{ $report->general_deformities }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Anaemia</span>
                            </td>
                            <td>{{ $report->general_anaemia }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Jaundice</span>
                            </td>
                            <td>{{ $report->general_jaundice }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Goitre</span>
                            </td>
                            <td>{{ $report->general_goitre }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Varicose Vein</span>
                            </td>
                            <td>{{ $report->general_varicose_vein }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Skin</span>
                            </td>
                            <td>{{ $report->general_skin }}</td>
                        </tr>
                        <tr>
                            <td><span class="title">.</span></td>
                            <td><span class="title">.</span></td>
                        </tr>
                        <tr>
                            <td><span class="title">.</span></td>
                            <td><span class="title">.</span></td>
                        </tr>

                        {{-- Vision --}}
                        <tr>
                            <td rowspan="2">
                                <span class="title">Vision</span>
                            </td>
                            <td style="text-align: right;"><span class="title">Left</span></td>
                            <td>{{ $report->vision_left }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <span class="title">Right</span>
                            </td>
                            <td>{{ $report->vision_right }}</td>
                        </tr>

                        {{-- Hearing --}}
                        <tr>
                            <td rowspan="2">
                                <span class="title">Hearing</span>
                            </td>
                            <td style="text-align: right;"><span class="title">Left</span></td>
                            <td>{{ $report->hearing_left }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: right;">
                                <span class="title">Right</span>
                            </td>
                            <td>{{ $report->hearing_right }}</td>
                        </tr>

                        {{-- Cardiovascuar System --}}
                        <tr>
                            <td rowspan="3">
                                <span class="title">Cardiovascular System</span>
                            </td>
                            <td>
                                <span class="title">Pulse</span>
                            </td>
                            <td>{{ $report->cardio_pulse }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Blood Pressure</span>
                            </td>
                            <td>{{ $report->cardio_blood_presure }} - mm</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Heart Sound</span>
                            </td>
                            <td>{{ $report->cardio_heart_sound }}</td>
                        </tr>

                        {{-- Respiratory System --}}
                        <tr>
                            <td rowspan="2">
                                <span class="title">Respiratory System</span>
                            </td>
                            <td>
                                <span class="title">Lungs</span>
                            </td>
                            <td>{{ $report->respiratory_lungs }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Chest X-Ray</span>
                            </td>
                            <td>{{ $report->respiratory_chest_x_ray }}</td>
                        </tr>

                        {{-- Gastrointestinal System --}}
                        <tr>
                            <td rowspan="2">
                                <span class="title">Respiratory System</span>
                            </td>
                            <td>
                                <span class="title">Abdomen</span>
                            </td>
                            <td>{{ $report->gastrointestinal_abdomen }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Hernia</span>
                            </td>
                            <td>{{ $report->gastrointestinal_hernia }}</td>
                        </tr>

                        {{-- Genitourinaray System --}}
                        <tr>
                            <td rowspan="2">
                                <span class="title">Genitourinary System</span>
                            </td>
                            <td>
                                <span class="title">Hydrocele</span>
                            </td>
                            <td>{{ $report->genitourinary_hydrocele }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Orchitis</span>
                            </td>
                            <td>{{ $report->genitourinary_orchitis }}</td>
                        </tr>

                        {{-- Locomotor System --}}
                        <tr>
                            <td rowspan="3">
                                <span class="title">Locomotor System</td>
                            <td>
                                <span class="title">Gait</span>
                            </td>
                            <td>{{ $report->locomotor_gait }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Joints</span>
                            </td>
                            <td>{{ $report->locomotor_joints }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Extremities</span>
                            </td>
                            <td>{{ $report->locomotor_extremities }}</td>
                        </tr>

                        {{-- Other Remarks (Special notes) --}}
                        <tr>
                            <td rowspan="4">
                                <span class="title">Other Remarks</span>
                            </td>
                            <td colspan="2" rowspan="4">
                                
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col m6" style="width: 50%;">
                <table>
                    <thead>
                        <tr class="laboratory">
                            <td colspan="2">
                                <p>
                                    LABORATORY INVESTIGATION
                                </p>
                            </td>
                            <td>
                                <p>Results</p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Urine --}}
                        <tr>
                            <td rowspan="2" style="text-align: center;">
                                <span class="title">Urine</span>
                            </td>
                            <td>
                                <span class="title">Sugar</span>
                            </td>
                            <td>{{ $report->urine_sugar }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Albumin</span>
                            </td>
                            <td>{{ $report->urine_albumin }}</td>
                        </tr>
                        
                        {{-- Stool --}}
                        <tr>
                            <td rowspan="4" style="text-align: center;">
                                <span class="title">Stool</span>
                            </td>
                            <td>
                                <span class="title">Helminths</span>
                            </td>
                            <td>{{ $report->stool_helminths }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Bilharziasis</span>
                            </td>
                            <td>{{ $report->stool_bilharziasis }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Salmonella/ Shigella</span>
                            </td>
                            <td>{{ $report->stool_salmonella_shigella }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Others</span>
                            </td>
                            <td>{{ $report->stool_others }}</td>
                        </tr>
                        
                        {{-- Blood --}}
                        <tr>
                            <td rowspan="5" style="text-align: center;">
                                <span class="title">Blood</span>
                            </td>
                            <td>
                                <span class="title">Blood Groun/Rh</span>
                            </td>
                            <td>{{ $report->blood_group }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Haemoglobin</span>
                            </td>
                            <td>{{ $report->blood_haemoglobin }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">ESR</span>
                            </td>
                            <td>{{ $report->blood_esr }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Malaria Film</span>
                            </td>
                            <td>{{$report->blood_malaria_film }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Micro Filariasis</span>
                            </td>
                            <td>{{ $report->blood_micro_filaris }}</td>
                        </tr>

                        {{-- Serology --}}
                        <tr>
                            <td rowspan="15" style="text-align: center;">
                                <span class="title">Serology</span>
                            </td>
                            <td>
                                <span class="title">VDRL</span>
                            </td>
                            <td>{{$report->serology_vdrl}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">TPHA</span>
                            </td>
                            <td>{{$report->serology_tpha}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">HIV 1&2 Test (ELISA)</span>
                            </td>
                            <td>{{$report->serology_hiv}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">HB s Ag</span>
                            </td>
                            <td>{{$report->serology_hb}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Hep A Ig M</span>
                            </td>
                            <td>{{$report->serology_hep}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">HCV</span>
                            </td>
                            <td>{{$report->serology_hcv}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Pregnancy (β HCG)</span>
                            </td>
                            <td>{{$report->serology_pregnancy}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">FBS/RBS</span>
                            </td>
                            <td>{{$report->serology_fbs}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">S.Creatinine</span>
                            </td>
                            <td>{{$report->serology_creatinine}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">SGOT</span>
                            </td>
                            <td>{{$report->serology_sgot}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">SGPT</span>
                            </td>
                            <td>{{$report->serology_sgpt}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Total Cholesterol</span>
                            </td>
                            <td>{{$report->serology_cholesterol}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Alk. Phosphatase</span>
                            </td>
                            <td>{{$report->serology_phosphatase}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Blood Uria</span>
                            </td>
                            <td>{{$report->serology_uria}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="title">Bilirubin</span>
                            </td>
                            <td>{{$report->serology_bilirunin}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="footer">
            <p>I here by certify that Mr. / Mrs. / Miss .........................................................</p>
            <p>Is free from any contagiouts disease at the time of examination and Fit / nfit for employement abroad</p>
            <p>Remarks:</p>
            <div class="row" style="width: 100%;">
                <div class="col m6" style="width: 50%;">
                    <p>............................................</p>
                    <p>Authorized Signature</p>
                </div>
                <div class="col m6" style="width: 50%;">
                    <p style="border: 1px solid #000;">Compurter Code No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        function printView() {
            $('#printView').css('display','none');
            window.print();
        }
        function showPrintView() {
            $('td').css('border-color', 'rgba(0,0,0,0)');
            $('tr').css('border-color', 'rgba(0,0,0,0)');
            $('.title').css('opacity', '0');
            $('.top-round').css('border-color', 'rgba(0,0,0,0)');
            $('.history').css('opacity', '0');
            $('.img-brd').css('border-color', 'rgba(0,0,0,0)');
            $('#printbtn').css('display', 'block');
            $('#showPrint').css('display', 'none');
            $('thead').css('opacity', '0');
            $('.footer').css('opacity', '0');
        }
    </script>
</body>
</html>

