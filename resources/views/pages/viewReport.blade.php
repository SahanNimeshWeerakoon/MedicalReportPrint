@extends('layouts.app')
@section('content')
    <div class="container view-report">
        <h4 class="center">Report Type</h4>
        <hr>
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
                        <td></td>
                    </tr>
                    <tr>
                        <td>Anaemia</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jaundice</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Goitre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Varicose Vein</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>skin</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span class="title">.</span></td>
                        <td><span class="title">.</span></td>
                    </tr>
                    <tr>
                        <td><span class="title">.</span></td>
                        <td><span class="title">.</span></td>
                    </tr>
                    
                    <!-- VISION -->
                    <tr>
                        <td rowspan="2">
                            <b>Vision</b>
                        </td>
                        <td class="right">Left</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="right">Right</td>
                        <td></td>
                    </tr>
    
                    <!-- HEARING -->
                    <tr>
                        <td rowspan="2">
                            <b>Hearing</b>
                        </td>
                        <td class="right">Left</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="right">Right</td>
                        <td></td>
                    </tr>
    
                    <!-- CARDIOVASCULAR SYSTEM -->
                    <tr>
                        <td rowspan="3">
                            <b>Cardiovascular System</b>
                        </td>
                        <td>Pulse</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Blood Pressure</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Heart Sound</td>
                        <td></td>
                    </tr>
    
                    <!-- RESPIRATORY SYSTEM -->
                    <tr>
                        <td rowspan="2">
                            <b>Respiratory System</b>
                        </td>
                        <td>Lungs</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Chest X-Ray</td>
                        <td></td>
                    </tr>
    
                    <!-- GASTROINTESTINAL SYSTEM -->
                    <tr>
                        <td rowspan="2">
                            <b>Gastrointestinal System</b>
                        </td>
                        <td>Abdomen</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hernia</td>
                        <td></td>
                    </tr>
    
                    <!-- GENITOURINARY SYSTEM -->
                    <tr>
                        <td rowspan="2">
                            <b>Genitourinary System</b>
                        </td>
                        <td>Hydrocele</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Orchitis</td>
                        <td></td>
                    </tr>
    
                    <!-- LOCLOMOTOR SYSTEM -->
                    <tr>
                        <td rowspan="3">
                            <b>Locomotor System</b>
                        </td>
                        <td>Gait</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Joints</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Extremitis</td>
                        <td></td>
                    </tr>
    
                    <!-- OTHER REMARKS -->
                    <tr>
                        <td rowspan="4">
                            <b>Other Remarks</b>
                        </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div id="laboratory">
            <table>
                    <thead>
                        <tr>
                            <th colspan="2" class="red accent-1">LABORATORY EXAMINATION</th>
                            <th>RESULTS</th>
                        </tr>

                        <!-- URINE -->
                        <tr>
                            <td rowspan="4">
                                <b>Urine</b>
                            </td>
                            <td>Sugar</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Albumin</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Birilubin</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>HCG (Pregnancy)</td>
                            <td></td>
                        </tr>

                        <!-- STOOL -->
                        <tr>
                            <td rowspan="4">
                                <b>Stool</b>
                            </td>
                            <td>Helminths</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bilharziasis</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Salmonella/Shigella</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Others</td>
                            <td></td>
                        </tr>

                        <!-- BLOOD -->
                        <tr>
                            <td rowspan="5">
                                <b>Blood</b>
                            </td>
                            <td>Blood groud/Rh</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Haemoglobin</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>ESR</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Malaria Film</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Micro Filariasis</td>
                            <td></td>
                        </tr>

                        <!-- SEROLOGY -->
                        <tr>
                            <td rowspan="15">
                                <b>Serology</b>
                            </td>
                            <td>VDRL</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>TPHA</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>HIV 1&2 Test (ELISA)</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>HB s Ag</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Hep A Ig M</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>HCV</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pregnancy ( β HCG )</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>FBS/RBS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>S.Creatinine</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>SGOT</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>SGPT</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Cholesterol</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alk.Phosphatase</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Blood Uria</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bilirubin</td>
                            <td></td>
                        </tr>
                    </thead>
            </table>
            <br>
            <a href="/editreport/1" class="btn orange right">EDIT REPORT</a>
            <a href="/preview/1" class="btn blue right">PRINT</a>
        </div>
    </div>
@endsection