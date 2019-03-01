@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"> --}}
@endpush
@section('content')
<br><br>
    <div class="container">
        <h5 class="center">Report Type - {{ $type }}</h5>
    </div>
    <div class="container" id="report-quest">
        <div class="your-class">
            <div>
                <h5>General Examination</h5>
                <div class="row">
                    <div class="input-field col m6">
                        <select id="deformities" onchange="addValues(this.id);">
                            <option value="" disabled selected>Deformities</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" id="deformities" class="validate" oninput="addValues(this.id);"> --}}
                        <label for="deformities">Deformities</label>
                    </div>
                    <div class="input-field col m6">
                        <select id="anaemia" onchange="addValues(this.id);">
                            <option value="" disabled selected>Anaemia</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" id="anaemia" class="validate" oninput="addValues(this.id);"> --}}
                        <label for="anaemia">Anaemia</label>
                    </div>
                    <div class="input-field col m12">
                        <select id="jaundice" onchange="addValues(this.id);">
                            <option value="" disabled selected>Jaundice</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" id="jaundice" class="validate" oninput="addValues(this.id);"> --}}
                        <label for="jaundice">Jaundice</label>
                    </div>
                    <div class="input-field col m12">
                        <select id="goiter" onchange="addValues(this.id);">
                            <option value="" disabled selected>Goiter</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" id="goiter" class="validate" oninput="addValues(this.id);"> --}}
                        <label for="goiter">Goiter</label>
                    </div>
                    <div class="input-field col m12">
                        <select id="varicose-vein" onchange="addValues(this.id);">
                            <option value="" disabled selected>Varicose Vein</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" id="varicose-vein" class="validate" oninput="addValues(this.id);"> --}}
                        <label for="varicose-vein">Varicose Vein</label>
                    </div>
                    <div class="input-field col s12">
                        <select id="skin" onchange="addValues(this.id);">
                            <option value="" disabled selected>Select Skin type</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        <label>Skin</label>
                    </div>
                </div>
            </div>
            <div>
                <h5>Vision</h5>
                <div class="row">
                    <div class="input-field col m6">
                        <select name="" id="eye-left" onchange="addValues(this.id);">
                            <option value="" selected disabled>Select Left Value</option>
                            <option value="6/6">6/6</option>
                            <option value="5/6">5/6</option>
                            <option value="4/6">4/6</option>
                            <option value="3/6">3/6</option>
                            <option value="2/6">2/6</option>
                            <option value="1/6">1/6</option>
                            <option value="0/6">0/6</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        <label for="eye-left">Left</label>
                    </div>
                    <div class="input-field col m6">
                        <select name="" id="eye-right" onchange="addValues(this.id);">
                            <option value="" selected disabled>Select Right Value</option>
                            <option value="6/6">6/6</option>
                            <option value="5/6">5/6</option>
                            <option value="4/6">4/6</option>
                            <option value="3/6">3/6</option>
                            <option value="2/6">2/6</option>
                            <option value="1/6">1/6</option>
                            <option value="0/6">0/6</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        <label for="eye-right">Right</label>
                    </div>
                </div>
                <br>
                <h5>Hearing</h5>
                <div class="row">
                    <div class="input-field col m6">
                        <select name="" id="hearing-left" onchange="addValues(this.id);">
                            <option value="" disabled selected>Select option</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                        </select>
                        <label for="hearing-left">Left</label>
                    </div>
                    <div class="input-field col m6">
                        <select name="" id="hearing-right" onchange="addValues(this.id);">
                            <option disabled selected value="">Select option</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                        </select>
                        <label for="hearing-right">Right</label>
                    </div>
                </div>
            </div>
            <div>
                <h5>Cardiovascular System</h5>
                <div class="row">
                    <div class="input-field col m4">
                        <input type="text" id="pulse" class="validate" oninput="addValues(this.id);">
                        <label for="pulse">Pulse</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" id="blood-pressure" class="validate" oninput="addValues(this.id);">
                        <label for="blood-pressure">Blood Pressure(mm)</label>
                    </div>
                    <div class="input-field col m4">
                        <select id="heart-sound" onchange="addValues(this.id);">
                            <option value="" disabled selected>Heart Sound</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" class="validate" id="heart-sound" oninput="addValues(this.id);" /> --}}
                        <label for="heart-sound">Heart Sound</label>
                    </div>
                </div>
                <h5>Respiratory System</h5>
                <div class="row">
                    <div class="input-field col m6">
                        <div class="row">
                            <div class="input-field col m8">
                                <input type="text" id="lungs-desc" oninput="addValues(this.id);" style="margin-top: -40px;">
                                <label for="lungs-desc" style="margin-top: -5px;">Lungs Status</label>
                            </div>
                            <div class="col m4">
                                <select id="lungs" onchange="addValues(this.id);">
                                    <option value="" disabled selected>Lung Status</option>
                                    <option value="normal">Normal</option>
                                    <option value="abnormal">Abnormal</option>
                                    <option value="not-done">Not Done</option>
                                </select>
                            </div>
                        </div>
                        {{-- <input type="text" id="lungs" class="validate" oninput="addValues(this.id);"> --}}
                    </div>
                    <div class="input-field col m6">
                        <select id="chest-x-ray" onchange="addValues(this.id);">
                            <option value="" disabled selected>Chest X-Ray</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" id="chest-x-ray" class="validate" oninput="addValues(this.id);"> --}}
                        <label for="chest-x-ray">Chest X-Ray</label>
                    </div>
                </div>
            </div>
            <div>
                <h5>Gastrointestinal System</h5>
                <div class="row">
                    <div class="input-field col m6">
                        <select id="abdomen" onchange="addValues(this.id);">
                            <option value="" disabled selected>Abdomen</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" class="validate" id="abdomen" oninput="addValues(this.id);"> --}}
                        <label for="abdomen">Abdomen</label>
                    </div>
                    <div class="input-field col m6">
                        <select id="hernia" onchange="addValues(this.id);">
                            <option value="" disabled selected>Hernia</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" class="validate" id="hernia" oninput="addValues(this.id);"> --}}
                        <label for="hernia">Hernia</label>
                    </div>
                </div>
                <h5>Genitourinary System</h5>
                <div class="row">
                    <div class="input-field col m6">
                        <select id="hydrocele" onchange="addValues(this.id);">
                            <option value="" disabled selected>Hydrocele</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" id="hydrocele" class="validate" oninput="addValues(this.id);"> --}}
                        <label for="hydrocele">Hydrocele</label>
                    </div>
                    <div class="input-field col m6">
                        <select id="orchitis" onchange="addValues(this.id);">
                            <option value="" disabled selected>Orchitis</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" id="orchitis" class="validate" oninput="addValues(this.id);"> --}}
                        <label for="orchitis">Orchitis</label>
                    </div>
                </div>
            </div>
            <div>
                <h5>Locomotor System</h5>
                <div class="row">
                    <div class="input-field col m4">
                        <select id="gait" onchange="addValues(this.id);">
                            <option value="" disabled selected>Gait</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" class="validate" id="gait" oninput="addValues(this.id);"> --}}
                        <label for="gait">Gait</label>
                    </div>
                    <div class="input-field col m4">
                        <select id="joints" onchange="addValues(this.id);">
                            <option value="" disabled selected>Joints</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" class="validate" id="joints" oninput="addValues(this.id);"> --}}
                        <label for="joints">Joints</label>
                    </div>
                    <div class="input-field col m4">
                        <select id="extremities" onchange="addValues(this.id);">
                            <option value="" disabled selected>Extremities</option>
                            <option value="normal">Normal</option>
                            <option value="abnormal">Abnormal</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" class="validate" id="extremities" oninput="addValues(this.id);"> --}}
                        <label for="extremities">Extremities</label>
                    </div>
                </div>
                {{-- <h5>Other Remarks</h5>
                <div class="row">
                    <div class="input-field col m12">
                        <textarea id="other-remarks" oninput="addValues(this.id);"></textarea>
                        <label for="other-remarks" class="materialize-textarea"></label>
                    </div>
                </div> --}}
            </div>

            <div>
                <h5>Urine</h5>
                <div class="row">
                    <div class="input-field col m4">
                        <input type="text" id="sugar" class="validate" oninput="addValues(this.id);">
                        <label for="sugar">Sugar</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" id="albumin" class="validate" oninput="addValues(this.id);">
                        <label for="albumin">Albumin</label>
                    </div>
                    {{-- <div class="input-field col m3">
                        <input type="text" id="bilirubin" class="validate" oninput="addValues(this.id);">
                        <label for="bilirubin">Bilirubin</label>
                    </div> --}}
                    <div class="input-field col m4">
                        <input type="text" id="urine-hcg" class="validate" oninput="addValues(this.id);">
                        <label for="urine-hcg">HCG (Pregnancy)</label>
                    </div>
                </div>
                <h5>Stool</h5>
                @if ($type == 'j')
                    <div class="row">
                        <div class="input-field col m4">
                            <input type="text" id="helminths" class="validate" oninput="addValues(this.id);">
                            <label for="helminths">Helminths</label>
                        </div>
                        <div class="input-field col m4">
                            <input type="text" id="bilhaziasis" class="validate" oninput="addValues(this.id);">
                            <label for="bilhaziasis">Bilhaziasis</label>
                        </div>
                        <div class="input-field col m4">
                            <input type="text" id="salmonella-shigella" class="validate" oninput="addValues(this.id);">
                            <label for="salmonella-shigella">Salmonella / Shigella</label>
                        </div>
                        <div class="input-field col m12">
                            <input type="text" id="other" class="validate" oninput="addValues(this.id);">
                            <label for="other">Others</label>
                        </div>
                    </div>
                @else
                    <h6>Stools test is not included in this report type</h6>
                @endif
            </div>
            <div>
                <h5>Blood</h5>
                <div class="row">
                    <div class="input-field col m4">
                        <select id="blood-group" class="validate" onchange="addValues(this.id);" {{ ($type=='d' || $type=='e' || $type=='f') ? "disabled value=Not_Included" : '' }}>
                            <option value="" selected>Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="not-done">Not Done</option>
                        </select>
                        {{-- <input type="text" class="validate" id="blood-group" oninput="addValues(this.id);" {{ ($type=='d' || $type=='e' || $type=='f') ? "disabled value=Not_Included" : '' }} /> --}}
                        <label for="blood-group">Blood Groud/Rh</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="haemoglobin" oninput="addValues(this.id);" {{ ($type=='d' || $type=='e') ? "disabled value=Not_Included" : '' }}/>
                        <label for="haemoglobin">Haemoglobin</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="esr" oninput="addValues(this.id);" {{ ($type=='j') ? ''  : 'disabled value="Not_Included"' }}/>
                        <label for="esr">ESR</label>
                    </div>
                    <div class="input-field col m6">
                        <input type="text" class="validate" id="malaria-film" oninput="addValues(this.id);" {{ ($type=='j') ? ''  : "disabled value=Not_Included" }}/>
                        <label for="malaria-film">Malaria Film</label>
                    </div>
                    <div class="input-field col m6">
                        <input type="text" class="validate" id="micro-filariasis" oninput="addValues(this.id);" {{ ($type=='j') ? ''  : "disabled value=Not_Included" }}/>
                        <label for="micro-filariasis">Micro Filariasis</label>
                    </div>
                </div>
            </div>
            <div>
                <h5>Serology</h5>
                <div class="row">
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="vdrl" oninput="addValues(this.id);" />
                        <label for="vdrl">VDRL</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="tpha" oninput="addValues(this.id);" />
                        <label for="tpha">TPHA</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="hiv" oninput="addValues(this.id);" />
                        <label for="hiv">HIV 1&2 Test (ELISA)</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="hb" oninput="addValues(this.id);" />
                        <label for="hb">HB s Ag</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="hep" oninput="addValues(this.id);" {{ ($type=='i' || $type=='j') ? '' : "disabled value=Blood group is not in this report type" }} />
                        <label for="hep">Hep A Ig M</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="hcv" oninput="addValues(this.id);" {{ ($type=='d') ? "disabled value=Blood group is not in this report type" : '' }} />
                        <label for="hcv">HCV</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="pregnency-b" oninput="addValues(this.id);" {{ ($pendingReport->sex == 'male') ? 'disabled' : '' }} />
                        <label for="pregnency-b">Pregnancy (β HCG)</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="fbs" oninput="addValues(this.id);" {{ ($type=='d' || $type=='e' || $type=='f') ? "disabled value=Blood group is not in this report type" : '' }} />
                        <label for="fbs">FBS / RBS</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="criatinine" oninput="addValues(this.id);" {{ ($type=='h' || $type=='i' || $type=='j') ? '' : "disabled value=Blood group is not in this report type" }} />
                        <label for="criatinine">S.Creatinine</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="sgot" oninput="addValues(this.id);" {{ ($type=='i' || $type=='j') ? '' : "disabled value=Blood group is not in this report type" }} />
                        <label for="sgot">SGOT</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="sgpt" oninput="addValues(this.id);" {{ ($type=='d' || $type=='e' || $type=='f') ? "disabled value=Blood group is not in this report type" : '' }} />
                        <label for="sgpt">SGPT</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="total-cholesterol" oninput="addValues(this.id);" {{ ($type=='i' || $type=='j') ? '' : "disabled value=Blood group is not in this report type" }} />
                        <label for="total-cholesterol">Total Cholesterol</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="alk-phosphate" oninput="addValues(this.id);" {{ ($type=='h' || $type=='i' || $type=='j') ? '' : "disabled value=Blood group is not in this report type" }} />
                        <label for="alk-phosphate">Alk. Phosphatase</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="blood-uria" oninput="addValues(this.id);" />
                        <label for="blood-uria">Blood Uria</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" class="validate" id="sere-bilirubin" oninput="addValues(this.id);" {{ ($type=='h' || $type=='i' || $type=='j') ? '' : "disabled value=Blood group is not in this report type" }} />
                        <label for="sere-bilirubin">Bilirubin</label>
                    </div>
                </div>
                <a href="#form" class="btn right red" id="see-and-edit">SEE AND EDIT THE REPORT</a>
            </div>
        </div>
    </div>

    <div class="view-edit-report" id="form">
        <h4 class="center">Report Type - {{ $type }}</h4>
        <hr>
        <form action="/savereport" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $pendingReport->user_id }}" />
            <input type="hidden" name="client_id" value="{{ $pendingReport->client_id }}" />
            <input type="hidden" name="report_type_id" value="{{ $pendingReport->report_type_id }}" />
            <input type="hidden" name="agency_id" value="{{ $pendingReport->agency_id }}" />
            <div class="personal">
                <div class="row">
                    <div class="col m2">
                        <img src="/storage/app/photos/{{ $pendingReport->image_url }}" alt="">
                    </div>
                    <div class="col m10">
                        <div class="row">
                            <input type="hidden" name="pending_id" value="{{ $pendingReport->id }}" />
                            <div class="input-field col m2">
                                <input type="date" id="date" value="{{ date('Y-m-d') }}" readonly/>
                                <label for="date">Date</label>
                            </div>
                            <div class="input-field col m4">
                                <input type="text" id="departure" value="{{ $pendingReport->destination }} " readonly/>
                                <label for="departure">To</label>
                            </div>
                            <div class="input-field col m4">
                                <input type="text" id="full-name" value="{{ $pendingReport->name }}" readonly/>
                                <label for="full-name">Full Name</label>
                            </div>
                            <div class="input-field col m4">
                                <input type="text" id="address" value="{{ $pendingReport->address }}" readonly/>
                                <label for="address">Address</label>
                            </div>
                            <div class="input-field col m4">
                                <input type="text" id="agency" value="{{ $pendingReport->agency_id }}" readonly/>
                                <label for="agency">Recruiting Agency ID</label>
                            </div>
                            <div class="input-field col m4">
                                <input type="text" id="passport" value="{{ $pendingReport->passport_no }}" readonly/>
                                <label for="passport">Passport Number</label>
                            </div>
                            <div class="input-field col m4">
                                <input type="text" id="position" value="{{ $pendingReport->position_applied }}" readonly/>
                                <label for="position">Position Applied For</label>
                            </div>
                            <div class="input-field col m4">
                                <input type="text" id="nationality" value="{{ $pendingReport->nationality }}" readonly/>
                                <label for="nationality">Nationality</label>
                            </div>
                            <div class="input-field col m4">
                                <input type="text" id="marital" value="{{ $pendingReport->marital }}" readonly/>
                                <label for="marital">Marital Status</label>
                            </div>
                            <div class="input-field col m2">
                                <input type="text" id="llno" value="{{ $pendingReport->llno }}" readonly/>
                                <label for="llno">L L No</label>
                            </div>
                            <div class="input-field col m2">
                                <input type="text" id="place" value="{{ $pendingReport->place_of_issue }}" readonly/>
                                <label for="place">Place Of Issue</label>
                            </div>
                            <div class="input-field col m2">
                                <input type="text" id="age" value="{{ $pendingReport->age }}" readonly/>
                                <label for="age">Age</label>
                            </div>
                            <div class="input-field col m2">
                                <input type="text" id="sex" value="{{ $pendingReport->sex }}" readonly/>
                                <label for="sex">Sex</label>
                            </div>
                            <div class="input-field col m2">
                                <input type="text" id="height" value="{{ $pendingReport->height }}" readonly/>
                                <label for="height">Height</label>
                            </div>
                            <div class="input-field col m2">
                                <input type="text" id="weight" value="{{ $pendingReport->weight }}" readonly/>
                                <label for="weight">Weight</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6">
                    <div id="medical">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2" class="light-blue accent-1">MEDICAL EXAMINATION</th>
                                    <th>RESULTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- GENERAL EXAMINATION -->
                                <tr>
                                    <td rowspan="8">
                                        <b>General Examination</b>
                                    </td>
                                    <td>Deformities</td>
                                    <td>
                                        <select id="deformities-output" class="browser-default"  name="general_deformities">
                                            <option value="" disabled selected>Deformities</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="deformities-output" name="general_deformities" class="validate" required /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Anaemia</td>
                                    <td>
                                        <select id="anaemia-output" class="browser-default"  name="general_anaemia">
                                            <option value="" disabled selected>Anaemia</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="anaemia-output" name="general_anaemia" class="validate" /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jaundice</td>
                                    <td>
                                        <select id="jaundice-output" class="browser-default"  name="general_jaundice">
                                            <option value="" disabled selected >Select Jaundice</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="jaundice-output" name="general_jaundice" class="validate" /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Goitre</td>
                                    <td>
                                        <select id="goiter-output" class="browser-default"  name="general_goiter">
                                            <option value="" disabled selected>Goiter</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="goiter-output" name="general_goiter" class="validate" /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Varicose Vein</td>
                                    <td>
                                        <select id="varicose-vein-output" class="browser-default"  name="general_varicose_vein">
                                            <option value="" disabled selected>Goiter</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="varicose-vein-output" name="general_varicose_vein" class="validate" /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>skin</td>
                                    <td>
                                        <select id="skin-output" class="browser-default"  name="general_skin">
                                            <option value="" disabled selected>Select Skin type</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                                <!-- VISION -->
                                <tr>
                                    <td rowspan="2">
                                        <b>Vision</b>
                                    </td>
                                    <td class="right">Left :</td>
                                    <td>
                                        <select class="browser-default" name="vission_left" id="eye-left-output">
                                            <option value="" selected disabled>Select Value</option>
                                            <option value="6/6">6/6</option>
                                            <option value="5/6">5/6</option>
                                            <option value="4/6">4/6</option>
                                            <option value="3/6">3/6</option>
                                            <option value="2/6">2/6</option>
                                            <option value="1/6">1/6</option>
                                            <option value="0/6">0/6</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="right" style="display:flex; align-items: center;" name="general-eye-right">Right :</td>
                                    <td>
                                        <select class="browser-default" name="vission_right" id="eye-right-output">
                                            <option value="" selected disabled>Select Value</option>
                                            <option value="6/6">6/6</option>
                                            <option value="5/6">5/6</option>
                                            <option value="4/6">4/6</option>
                                            <option value="3/6">3/6</option>
                                            <option value="2/6">2/6</option>
                                            <option value="1/6">1/6</option>
                                            <option value="0/6">0/6</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                    </td>
                                </tr>
                
                                <!-- HEARING -->
                                <tr>
                                    <td rowspan="2">
                                        <b>Hearing</b>
                                    </td>
                                    <td class="right">Left</td>
                                    <td>
                                        <select name="hearing_left" id="hearing-left-output" class="browser-default">
                                            <option disabled selected value="">Select option</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="right">Right</td>
                                    <td>
                                        <select name="hearing_right" id="hearing-right-output" class="browser-default">
                                            <option disabled selected value="">Select option</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                    </td>
                                </tr>
                
                                <!-- CARDIOVASCULAR SYSTEM -->
                                <tr>
                                    <td rowspan="3">
                                        <b>Cardiovascular System</b>
                                    </td>
                                    <td>Pulse</td>
                                    <td>
                                        <input type="text" id="pulse-output"  name="general_pulse" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Blood Pressure</td>
                                    <td>
                                        <div class="row">
                                            <div class="col m9">
                                                <input type="text" id="blood-pressure-output" name="general_blood_pressure" />
                                            </div>
                                            <div class="col m3" style="margin-top: 15px;">
                                                <span> -mm </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Heart Sound</td>
                                    <td>
                                        <select id="heart-sound-output" class="browser-default"  name="general_heart_sound">
                                            <option value="" disabled selected>Heart Sound</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="heart-sound-output" name="general_heart_sound" /> --}}
                                    </td>
                                </tr>
                
                                <!-- RESPIRATORY SYSTEM -->
                                <tr>
                                    <td rowspan="2">
                                        <b>Respiratory System</b>
                                    </td>
                                    <td>Lungs Status</td>
                                    <td>
                                        <input type="text" id="lungs-desc-output" name="general_lungs_desc" />
                                        <select id="lungs-output" class="browser-default"  name="general_lungs_output">
                                            <option value="" disabled selected>Lungs Status</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="lungs-output" name="general_lungs_output" /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chest X-Ray</td>
                                    <td>
                                        <select id="chest-x-ray-output" class="browser-default"  name="general_chest_x_ray">
                                            <option value="" disabled selected>Chest X-Ray</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="chest-x-ray-output" name="general_chest_x_ray" /> --}}
                                    </td>
                                </tr>
                
                                <!-- GASTROINTESTINAL SYSTEM -->
                                <tr>
                                    <td rowspan="2">
                                        <b>Gastrointestinal System</b>
                                    </td>
                                    <td>Abdomen</td>
                                    <td>
                                        <select id="abdomen-output" class="browser-default"  name="general_abdomen">
                                            <option value="" disabled selected>Abdomen</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="abdomen-output" name="general_abdomen" /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hernia</td>
                                    <td>
                                        <select id="hernia-output" class="browser-default"  name="general_hernia">
                                            <option value="" disabled selected>Hernia</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="hernia-output" name="general_hernia" /> --}}
                                    </td>
                                </tr>
                
                                <!-- GENITOURINARY SYSTEM -->
                                <tr>
                                    <td rowspan="2">
                                        <b>Genitourinary System</b>
                                    </td>
                                    <td>Hydrocele</td>
                                    <td>
                                        <select id="hydrocele-output" class="browser-default"  name="general_hydrocele">
                                            <option value="" disabled selected>Hydrocele</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="hydrocele-output" name="general_hydrocele" /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Orchitis</td>
                                    <td>
                                        <select id="orchitis-output" class="browser-default"  name="general_orchitis">
                                            <option value="" disabled selected>Orchitis</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" id="orchitis-output" name="general_orchitis" /> --}}
                                    </td>
                                </tr>
                
                                <!-- LOCLOMOTOR SYSTEM -->
                                <tr>
                                    <td rowspan="3">
                                        <b>Locomotor System</b>
                                    </td>
                                    <td>Gait</td>
                                    <td>
                                        <select id="gait-output" class="browser-default"  name="general_gait">
                                            <option value="" disabled selected>Gait</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" class="validate" id="gait-output" name="general_gait" /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Joints</td>
                                    <td>
                                        <select id="joints-output" class="browser-default"  name="general_joints">
                                            <option value="" disabled selected>Joints</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" class="validate" id="joints-output" name="general_joints" /> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Extremitis</td>
                                    <td>
                                        <select id="extremities-output" class="browser-default"  name="general_extremitites">
                                            <option value="" disabled selected>Extremitis</option>
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" class="validate" id="extremities-output" name="general_extremitites" /> --}}
                                    </td>
                                </tr>
                
                                <!-- OTHER REMARKS -->
                                {{-- <tr>
                                    <td rowspan="4">
                                        <b>Other Remarks</b>
                                    </td>
                                    <td colspan="2" rowspan="4">
                                        <textarea id="other-remarks-output" name="general_other_locomotion" ></textarea>
                                    </td>
                                </tr> --}}
                                {{-- <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr> --}}
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col m6">
                    <div id="laboratory">
                        {{-- @if ($type == 'j')
                        <h1>type j</h1>
                        @else
                        <h1>not type j</h1>
                        @endif --}}
                        
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2" class="red accent-1">LABORATORY EXAMINATION</th>
                                    <th>RESULTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- URINE -->
                                <tr>
                                    <td rowspan="3">
                                        <b>Urine</b>
                                    </td>
                                    <td>Sugar</td>
                                    <td>
                                        <input type="text" id="sugar-output" name="urine_sugar" class="validate" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Albumin</td>
                                    <td>
                                        <input type="text" id="albumin-output" name="urine_albumin" class="validate" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>HCG (Pregnancy)</td>
                                    <td>
                                        <input type="text" id="urine-hcg-output" name="urine_hcg" class="validate" />
                                    </td>
                                </tr>
                                <!-- STOOL -->
                                {{-- @if ($type=='j') --}}
                                    <tr>
                                        <td rowspan="4">
                                            <b>Stool</b>
                                        </td>
                                        <td>Helminths</td>
                                        <td>
                                            <input type="text" id="helminths-output" name="stool_helminths" class="validate" value="{{ ($type=='j') ? '' : 'Not Done' }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bilharziasis</td>
                                        <td>
                                            <input type="text" id="bilhaziasis-output" name="stool_bilhaziasis" class="validate" value="{{ ($type=='j') ? '' : 'Not Done' }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Salmonella/Shigella</td>
                                        <td>
                                            <input type="text" id="salmonella-shigella-output"  name="stool_salmonella_shigella" class="validate" value="{{ ($type=='j') ? '' : 'Not Done' }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Others</td>
                                        <td>
                                            <input type="text" id="other-output" name="stool_other" class="validate" value="{{ ($type=='j') ? '' : 'Not Done' }}" />
                                        </td>
                                    </tr>
                                {{-- @endif --}}
        
                                <!-- BLOOD -->
                                <tr>
                                    <td rowspan="5">
                                        <b>Blood</b>
                                    </td>
                                    <td>Blood groud/Rh</td>
                                    <td>
                                        {{-- @if($type=='d' || $type=='e' || $type=='f') --}}
                                        {{-- @else --}}
                                        <select id="blood-group-output" class="browser-default"  name="blood_group">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="not-done">Not Done</option>
                                        </select>
                                        {{-- <input type="text" class="validate" name="blood_group" id="blood-group-output" value="{{ ($type=='d' || $type=='e' || $type=='f') ? 'Not Done' : ''}}" /> --}}
                                        {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Haemoglobin</td>
                                    <td>
                                        {{-- @if ($type == 'd' || $type == 'e')
                                        @else --}}
                                            <input type="text" class="validate" name="blood_haemoglobin" id="haemoglobin-output" value="{{ ($type == 'd' || $type == 'e') ? 'Not Done' : '' }}" />
                                        {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>ESR</td>
                                    <td>
                                    {{-- @if ($type=='j') --}}
                                        <input type="text" class="validate" name="blood_esr" id="esr-output" value="{{ ($type=='j') ? '' : 'Not Done' }}" />
                                    {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Malaria Film</td>
                                    <td>
                                    {{-- @if ($type=='j') --}}
                                        <input type="text" class="validate" name="blood_malaria" id="malaria-film-output" value="{{ ($type=='j') ? '' : 'Not Done' }}" />
                                    {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Micro Filariasis</td>
                                    <td>
                                    {{-- @if ($type=='j') --}}
                                        <input type="text" class="validate" name="blood_micro_filariasis" id="micro-filariasis-output" value="{{ ($type=='j') ? '' : 'Not Done' }}" />
                                    {{-- @endif --}}
                                    </td>
                                </tr>
        
                                <!-- SEROLOGY -->
                                <tr>
                                    <td rowspan="15">
                                        <b>Serology</b>
                                    </td>
                                    <td>VDRL</td>
                                    <td>
                                        <input type="text" class="validate" name="serelogy_vdrl" id="vdrl-output" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>TPHA</td>
                                    <td>
                                        <input type="text" class="validate" name="serelogy_thpa" id="tpha-output" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>HIV 1&2 Test (ELISA)</td>
                                    <td>
                                        <input type="text" class="validate" name="serelogy_hiv" id="hiv-output" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>HB s Ag</td>
                                    <td>
                                        <input type="text" class="validate" name="serelogy_hb" id="hb-output" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hep A Ig M</td>
                                    <td>
                                    {{-- @if ($type=='i' || $type=='j') --}}
                                        <input type="text" class="validate" name="serelogy_hep" id="hep-output" value="{{ ($type=='i' || $type=='j') ? '' : 'Not Done'}}" />
                                    {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>HCV</td>
                                    <td>
                                    {{-- @if ($type!='d') --}}
                                        <input type="text" class="validate" name="serelogy_hcv" id="hcv-output" value="{{ ($type=='d') ? 'Not Done' : '' }}" />
                                    {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pregnancy ( β HCG )</td>
                                    <td>
                                    {{-- @if ($pendingReport->sex == 'female') --}}
                                        <input type="text" class="validate" name="serelogy_pregnancy" id="pregnency-b-output" value="{{ ($pendingReport->sex == 'male') ? 'Not Done' : '' }}" />
                                    {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>FBS/RBS</td>
                                    <td>
                                        {{-- @if ($type=='d' || $type=='e' || $type=='f')
                                        @else --}}
                                            <input type="text" class="validate" name="serelogy_fbs" id="fbs-output" value="{{ ($type=='d' || $type=='e' || $type=='f') ? 'Not Done' : '' }}" />
                                        {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>S.Creatinine</td>
                                    <td>
                                        {{-- @if ($type=='h' || $type=='i' || $type=='j') --}}
                                            <input type="text" class="validate" name="serelogy_criatinine" id="criatinine-output" value="{{ ($type=='h' || $type=='i' || $type=='j') ? '' : 'Not Done' }}" />
                                        {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>SGOT</td>
                                    <td>
                                    {{-- @if ($type=='i' || $type=='j') --}}
                                        <input type="text" class="validate" name="serelogy_sgot" id="sgot-output" value="{{ ($type=='i' || $type=='j') ? '' : 'Not Done' }}" />
                                    {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>SGPT</td>
                                    <td>
                                        {{-- @if ($type=='d' || $type=='e' || $type=='f')
                                        @else --}}
                                            <input type="text" class="validate" name="serelogy_sgpt" id="sgpt-output" value="{{ ($type=='d' || $type=='e' || $type=='f') ? 'Not Done' : '' }}" />
                                        {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Total Cholesterol</td>
                                    <td>
                                    {{-- @if ($type=='i' || $type=='j') --}}
                                        <input type="text" class="validate" name="serelogy_total_cholesterol" id="total-cholesterol-output" value="{{ ($type=='i' || $type=='j') ? '' : 'Not Done' }}" />
                                    {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alk.Phosphatase</td>
                                    <td>
                                        {{-- @if ($type=='h' || $type=='i' || $type=='j') --}}
                                            <input type="text" class="validate" name="serelogy_alk_phosphate" id="alk-phosphate-output" value="{{ ($type=='h' || $type=='i' || $type=='j') ? '' : 'Not Done' }}" />
                                        {{-- @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Blood Uria</td>
                                    <td>
                                        <input type="text" class="validate" name="serelogy_blood_uria" id="blood-uria-output" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bilirubin</td>
                                    <td>
                                    {{-- @if ($type=='h' || $type=='i' || $type=='j') --}}
                                        <input type="text" class="validate" name="serology_bilirubin" id="sere-bilirubin-output" value="{{ ($type=='h' || $type=='i' || $type=='j') ? '' : 'Not Done' }}" />
                                    {{-- @endif --}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <label for="special-note" style="font-size: 1em; color: #000; opacity: 1;">Special Notes</label>
                        <textarea id="special-note" name="special_note" style="width: 100%;"></textarea>
                        <input type="submit" class="right btn" value="SAVE AND VIEW REPORT">
                        {{-- <a href="/editreport/1" class="btn orange right">EDIT REPORT</a>
                        <a href="/preview/1" class="btn blue right">PRINT</a> --}}
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br><br>
@endsection
@push('script')
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script>
        $(document).ready(function() {
			$('.your-class').slick({
                infinite: false,
			});
            $('.slick-arrow').addClass('btn');
		});
        
        function addValues(id) {
            var input_id = '#' + id;
            var value = $(input_id).val();

            var output_id = input_id + '-output';
            $(output_id).val(value);
        }
        $('#see-and-edit').on('click', function() {
            $('#form').css("display", "block");
            $('#report-quest').css("display", "none");
        });
        
    </script>
@endpush