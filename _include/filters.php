<div class="filter-parent">
    <div class="filters-label">
        Φίλτρα Αναζήτησης
        <span class="icon-fi-sr-angle-down"></span>
    </div>



  
    <div class="filters-conatiner" data-collapsed="false">




        <div class="filters-padding">
            <div class="input-padding num0">
                <div class="material-text-field__container ">
                    <div class="material-text-field">
                        <input id="input-password" autocomplete="host" type="text" placeholder=" " data-last-val=""
                            data-validate="required host" data-validate-length="" ;="" value=""
                            class="material-text-field__input-text">
                        <div id="label-text" class="material-text-field__label-text">ID</div>
                        <div id="activation-indicator" class="material-text-field__activation-indicator"></div>


                    </div>
                    <div id="helper-text" class="material-text-field__helper-text">
                    </div>
                </div>
            </div>
            <div class="input-padding num1">
                <div class="material-text-field__container ">
                    <div class="material-text-field">
                        <input id="input-password" autocomplete="host" type="text" placeholder=" " data-last-val=""
                            data-validate="required host" data-validate-length="" ;="" value=""
                            class="material-text-field__input-text">
                        <div id="label-text" class="material-text-field__label-text">Domain Νame</div>
                        <div id="activation-indicator" class="material-text-field__activation-indicator"></div>


                    </div>
                    <div id="helper-text" class="material-text-field__helper-text">
                    </div>
                </div>
            </div>
            <div class="input-padding num2">
                <div class="material-text-field__container ">
                    <div class="material-text-field">
                        <input id="input-password" autocomplete="host" type="text" placeholder=" " data-last-val=""
                            data-validate="required host" data-validate-length="" ;="" value=""
                            class="material-text-field__input-text">
                        <div id="label-text" class="material-text-field__label-text">Ε-mail Χρήστη</div>
                        <div id="activation-indicator" class="material-text-field__activation-indicator"></div>


                    </div>
                    <div id="helper-text" class="material-text-field__helper-text">
                    </div>
                </div>
            </div>
            <div class="input-padding num3">
                <div class="material-text-field__container ">
                    <div class="material-text-field">
                        <input id="input-password" autocomplete="host" type="text" placeholder=" " data-last-val=""
                            data-validate="required host" data-validate-length="" ;="" value=""
                            class="material-text-field__input-text">
                        <div id="label-text" class="material-text-field__label-text">Όνομα Κατόχου</div>
                        <div id="activation-indicator" class="material-text-field__activation-indicator"></div>


                    </div>
                    <div id="helper-text" class="material-text-field__helper-text">
                    </div>
                </div>
            </div>
            
            <div class="input-padding num5">
                <div class="select-parent"><select class="form-select" aria-label="" required="">
                        <option value="" disabled="" selected="" style="display: none;">
                        </option>
                        <option value="1">300146 ‐ Κωνσταντίνος Χριστόπουλος</option>
                        <option value="2">300134 ‐ pantazis vastardis</option>
                    </select><label class="select-label">Kατάσταση Domain</label></div>
            </div>

            <div class="input-padding num5">
                <div class="select-parent"><select class="form-select focus" aria-label="" required="">
                        <option value="" disabled="" selected="" style="display: none;">
                        </option>
                        <option value="1">300146 ‐ Κωνσταντίνος Χριστόπουλος</option>
                        <option value="2">300134 ‐ pantazis vastardis</option>
                    </select><label class="select-label">Kατάσταση Domain</label></div>
            </div>
            <div class="input-padding num6">
                <div class="select-parent">
                    <input class="input-date" type="date" placeholder=" " value="" min="2020-01-01" max="2021-12-21">
                    <label class="select-label">Λήγει από</label>
                </div>
            </div>
            <div class="input-padding num7">
                <div class="select-parent">
                    <input class="input-date " type="date" placeholder=" " pattern="dd-mm-yyyy" value=" "
                        min="2020-01-01" max="2021-12-21">
                    <label class="select-label">Λήγει έως</label>
                </div>
            </div>
            <div class="input-padding num8">
                <div class="select-parent"><select class="form-select" aria-label="" required="">
                        <option value="" disabled="" selected="" style="display: none;"></option>
                        <option value="1">300146 ‐ Κωνσταντίνος Χριστόπουλος</option>
                        <option value="2">300134 ‐ pantazis vastardis</option>
                    </select>
                    <label class="select-label">Κατάσταση Επιβεβαίωσης</label>
                </div>
            </div>
            <div class="input-padding  num9">
            <div class="filter_checkbox">
                <label class="checkbox_filter">Προϋπόθεση</label>
                <div class="checkbox-parent">
                <input type="checkbox" class="checkbox">
                <div class="knobs">
                <span>off</span>
                <span>on</span>
                </div>
                <div class="layer"></div>
                </div> 
             </div>



            </div>
            <div class="input-padding half num10">
            <button type="button" class="btn">Clear all</button>
            </div>
            <div class="input-padding oneandhalf  num11">
            <button type="button" class="btn btn-green2">ΑΝΑΖΗΤΗΣΗ</button>
                        
            </div>
        </div>




    </div>








</div>



<script>
    function filters() {






        var input2 = $(".select-parent")[0];
        $(".num6,.num7").each(function (index) {



            // $(this).html(input2.outerHTML);
        });

    };

    window.addEventListener('DOMContentLoaded', filters)


</script>