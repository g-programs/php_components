<style>
    .contained {
        max-width: 1350px;
        margin: auto;
        padding: 3em;
    }
    .grey-bg {
        background: #f3f3f3;
    }
    .by-state--dropdowns {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .acc-group {
        width: clamp(350px, 33%, 100%);
    }
    .accordion {
        background-color: transparent;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: 0;
        border-radius: 0;
        border-bottom: 1px solid #a3a3a3;
        outline: none;
        transition: 0.4s;
    }
    .active, .accordion:hover {
        background-color: transparent;
    }
    .panel {
        padding: 0 18px;
        background-color: transparent;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
    .accordion:after {
        content: url('/assets/dwn-arrow.svg');
        float: right;
        width: 16px;
    }
    .active:after {
        content: url('/assets/up-arrow.svg');
        width: 16px;
    }
    .mass-torts-cat::before {
        content: "";
        display: inline-block;
        width: 15px;
        height: 15px;
        margin-right: 5px;
    }
    .mass-torts-cat a {
        color: #000;
    }
    .mass-torts-cat a:hover {
        text-decoration: underline;
    }
    .pl-color-mt::before {
        background-color: #8c5df7;
    }

    .pi-color-mt::before {
        background-color: #ee6d4f;
    }

    .hd-color-mt::before {
        background-color: #1fc4f4;
    }

    .md-color-mt::before {
        background-color: #17ed90;
    }

    .bi-color-mt::before {
        background-color: #fabf0c;
    }
</style>
<section class="by-state grey-bg">
    <div class="by-state--container contained">
        <h2 class="section-title">Mass Torts By State</h2>
        <div class="by-state--dropdowns">

            <?php
            $state_list = array('AL'=>"Alabama",
//                'AK'=>"Alaska",
                'AZ'=>"Arizona",
//                'AR'=>"Arkansas",
                'CA'=>"California",
                'CO'=>"Colorado",
                'CT'=>"Connecticut",
                'DE'=>"Delaware",
                'DC'=>"District Of Columbia",
                'FL'=>"Florida",
                'GA'=>"Georgia",
                'HI'=>"Hawaii",
//                'ID'=>"Idaho",
                'IL'=>"Illinois",
                'IN'=>"Indiana",
//                'IA'=>"Iowa",
                'KS'=>"Kansas",
                'KY'=>"Kentucky",
                'LA'=>"Louisiana",
                'ME'=>"Maine",
                'MD'=>"Maryland",
                'MA'=>"Massachusetts",
                'MI'=>"Michigan",
                'MN'=>"Minnesota",
//                'MS'=>"Mississippi",
                'MO'=>"Missouri",
//                'MT'=>"Montana",
                'NE'=>"Nebraska",
//                'NV'=>"Nevada",
                'NH'=>"New Hampshire",
                'NJ'=>"New Jersey",
//                'NM'=>"New Mexico",
                'NY'=>"New York",
                'NC'=>"North Carolina",
//                'ND'=>"North Dakota",
                'OH'=>"Ohio",
//                'OK'=>"Oklahoma",
                'OR'=>"Oregon",
                'PA'=>"Pennsylvania",
                'RI'=>"Rhode Island",
                'SC'=>"South Carolina",
//                'SD'=>"South Dakota",
                'TN'=>"Tennessee",
                'TX'=>"Texas",
//                'UT'=>"Utah",
                'VT'=>"Vermont",
                'VA'=>"Virginia",
//                'WA'=>"Washington",
//                'WV'=>"West Virginia",
                'WI'=>"Wisconsin");
//                'WY'=>"Wyoming");

            foreach ($state_list as $state) {
                $urlState = strtolower(str_replace(' ','-',$state));
                ?>
                <div class="acc-group">
                    <button class="accordion"><?php echo $state; ?></button>
                    <div class="panel">
                        <p class="pl-color-mt mass-torts-cat"><a href="/state/<?php echo $urlState ?>">Product Liability in <?php echo $state ?></a></p>
                        <p class="pi-color-mt mass-torts-cat"><a href="/state/<?php echo $urlState ?>">Personal Injury in <?php echo $state ?></a></p>
                        <p class="md-color-mt mass-torts-cat"><a href="/state/<?php echo $urlState ?>">Medical Device in <?php echo $state ?></a></p>
                        <p class="hd-color-mt mass-torts-cat"><a href="/state/<?php echo $urlState ?>">Harmful Drugs in <?php echo $state ?></a></p>
                        <p class="bi-color-mt mass-torts-cat"><a href="/state/<?php echo $urlState ?>">Birth Injuries in <?php echo $state ?></a></p>
                        <a href="/state/<?php echo $urlState ?>"><button class="blue-btn">See All Active in <?php echo $state ?></button></a>
                    </div>
                </div>
           <?php } ?>

        </div>


    </div>
</section>
<script>
    let acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>