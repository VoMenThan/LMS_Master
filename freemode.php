<?php include('header.php'); ?>
    <div class="wrap-page">
        <div class="container">
            <div class="row">
                <div class="col-25">
                    <table class="list-player">
                        <tr class="h60 label-col">
                            <td class="col-first col-1">SLOT</td>
                            <td class="col-2"></td>
                            <td class="col-3">START</td>
                            <td class="col-first col-4">FINISH</td>
                        </tr>
                        <tr class="h60 person active">
                            <td class="col-1">1</td>
                            <td class="col-2">free practice</td>
                            <td class="col-3">9:00</td>
                            <td class="col-first col-4">9:11</td>
                        </tr>

                        <?php for($i=2; $i<=9; $i++){ ?>
                        <tr class="h30 break">
                            <td colspan="4" class="text-center">3-minute break</td>
                        </tr>
                        <tr class="h60 person">
                            <td class="col-1"><?=$i?></td>
                            <td class="col-2">free practice</td>
                            <td class="col-3">9:00</td>
                            <td class="col-first col-4">9:11</td>
                        </tr>
                        <?php } ?>
                        <tr class="h30 break">
                            <td colspan="4" class="text-center">3-minute break</td>
                        </tr>
                    </table>
                </div>

                <div class="col-50">
                    <table class="list-player list-bracket">
                        <tr class="h60 label-col">
                            <td class="col-1 text-left name-col-1" colspan="3">UB 115 4T — PISTON 54MM FREE  — Group c</td>
                            <td class="text-right"><span class="timemode_gray">TIME MODE</span></td>
                        </tr>
                        <tr class="box-center">
                            <td class="col-image">
                                <div class="img text-left"><img src="assets/images/img/tuan.jpg" alt=""></div>
                            </td>
                            <td class="box-content" colspan="2">
                                <ul class="h30 ">
                                    <li class="num1 text-left pl-30">0.71</li>
                                    <li class="num2">RT</li>
                                    <li class="num3 text-right pr-30 yellow">0.68</li>
                                </ul>
                                <ul class="h30 ">
                                    <li class="num1 text-left pl-30 yellow">8.55</li>
                                    <li class="num2">ET</li>
                                    <li class="num3 text-right pr-30">9.78</li>
                                </ul>
                                <ul class="h30 ">
                                    <li class="num1 text-left pl-30 yellow">326.40</li>
                                    <li class="num2">MPH</li>
                                    <li class="num3 text-right pr-30">450.28</li>
                                </ul>


                            </td>
                            <td class="col-image"><div class="img text-right"><img src="assets/images/img/quang.jpg" alt=""></div></td>
                        </tr>

                    </table>
                    <table class="list-player">
                        <tr class="h120 person box-head">
                            <td class="title1 f48 text-left">AT9</td>
                            <td class="title2 f60 text-left yellow">
                                <img src="assets/images/img/cup.png" alt="">
                                8.555
                            </td>
                            <td class="title3 f30 text-center">TT</td>
                            <td class="title4 f60 text-right">9.789</td>
                            <td class="title5 f48 text-right">VW7</td>
                        </tr>
                    </table>

                    <table class="list-player other-result">
                        <tr class="h60 label-col">
                            <td class="timemode_gray text-right" colspan="9">OTHER RESULT</td>
                        </tr>
                        <?php  for($i =0; $i<4; $i++){?>
                            <tr class="h80 person">
                                <td class="cot1" rowspan="3"><img src="assets/images/img/tuan.jpg" alt=""></td>
                                <td class="cot2 f30" rowspan="2"><img src="assets/images/img/cup.png" alt="">AT9</td>
                                <td class="cot3 f30 text-center yellow" rowspan="2">8.55</td>
                                <td class="cot4">0.71</td>
                                <td class="cot5 text-center">RT</td>
                                <td class="cot6">0.71</td>
                                <td class="cot7 f30 text-center" rowspan="2">9.78</td>
                                <td class="cot8 f30" rowspan="2">VW7</td>
                                <td class="cot9" rowspan="3"><img src="assets/images/img/quang.jpg" alt=""></td>
                            </tr>
                            <tr class="h80 person">
                                <td class="cot4">9.78</td>
                                <td class="cot5 text-center">ET</td>
                                <td class="cot6">9.78</td>
                            </tr>
                            <tr class="h80 person">
                                <td class="cot2 f12" colspan="2" >Nguyễn Anh Tuấn</td>
                                <td class="cot4">326.40</td>
                                <td class="cot5 text-center">MPH</td>
                                <td class="cot6">326.40</td>
                                <td class="cot8 f12" colspan="2">Trần Văn Quang</td>
                            </tr>
                            <tr>
                                <td class="mb-20" colspan="9"></td>
                            </tr>
                        <?php }?>
                    </table>
                </div>

                <div class="col-25">
                    <table class="list-result">
                        <tr class="h60 label-col">
                            <td class="col-last" colspan="5"><div class="right tt-opa">other results</div></td>
                        </tr>
<!--                        Item-->
                        <tr pt-0>
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4 win">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1 cup">
                                X001
                                <img src="assets/images/img/cup-sm.png" alt="">
                            </td>
                            <td class="col-2 win">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4">9.78</td>
                            <td class="col-5">A001</td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>
