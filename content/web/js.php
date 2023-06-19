<?php 
//INCLUDE

?>



<script src="<?php echo $vUrlDomain;?>content/web/js/globe.js"></script>
<script>
        let cardOne = document.querySelector('#song-1');
        let cardTwo = document.querySelector('#song-2');
        let cardThree = document.querySelector('#song-3');
        let cardFour = document.querySelector('#song-4');
        let cardFive = document.querySelector('#song-5');
        let cardSix = document.querySelector('#song-6');

        const soundLine = document.querySelector('.soundLine');


        const cards = document.querySelectorAll('.r_card');
        const cardArray = Array.from(cards);

        const inputs = document.querySelectorAll('.js-slider-top');
        const inputsArray = Array.from(inputs);

        console.log(inputs)

        let interval;

        const cardsTransformValue = {
            cardOne: 'translate(0%, 175%) scale(1)',

            cardTwo: 'translate(110%, 110%) scale(.8)',

            cardThree: 'translate(160%, 20%) scale(.6)',

            cardFour: 'translate(80%, -30%) scale(.4)',

            cardFive: 'translate(-110%, 50%) scale(.7)',

            cardSix: 'translate(-160%, 150%) scale(.8)'
        }

        function moveTopCarossel() {
            inputsArray.forEach((input, index) => {
                input.addEventListener('change', () => {
                    if (input.checked) {
                        console.log(index)
                        switch (index) {
                            case 5:
                                inputsArray[1].labels[0].style.transform = cardsTransformValue.cardThree;
                                inputsArray[2].labels[0].style.transform = cardsTransformValue.cardFour;

                                inputsArray[3].labels[0].style.transform = cardsTransformValue.cardFive;
                                inputsArray[4].labels[0].style.transform = cardsTransformValue.cardSix;

                                inputsArray[0].labels[0].style.transform = cardsTransformValue.cardTwo;

                                inputsArray[5].labels[0].style.transform = cardsTransformValue.cardOne;
                                break;

                            case 4:
                                inputsArray[0].labels[0].style.transform = cardsTransformValue.cardThree;
                                inputsArray[1].labels[0].style.transform = cardsTransformValue.cardFour;

                                inputsArray[2].labels[0].style.transform = cardsTransformValue.cardFive;
                                inputsArray[3].labels[0].style.transform = cardsTransformValue.cardSix;

                                inputsArray[5].labels[0].style.transform = cardsTransformValue.cardTwo;

                                inputsArray[4].labels[0].style.transform = cardsTransformValue.cardOne;

                                break;

                            case 3:
                                inputsArray[5].labels[0].style.transform = cardsTransformValue.cardThree;
                                inputsArray[0].labels[0].style.transform = cardsTransformValue.cardFour;

                                inputsArray[1].labels[0].style.transform = cardsTransformValue.cardFive;
                                inputsArray[2].labels[0].style.transform = cardsTransformValue.cardSix;

                                inputsArray[4].labels[0].style.transform = cardsTransformValue.cardTwo;

                                inputsArray[3].labels[0].style.transform = cardsTransformValue.cardOne;

                                break;

                            case 2:
                                inputsArray[4].labels[0].style.transform = cardsTransformValue.cardThree;
                                inputsArray[5].labels[0].style.transform = cardsTransformValue.cardFour;

                                inputsArray[0].labels[0].style.transform = cardsTransformValue.cardFive;
                                inputsArray[1].labels[0].style.transform = cardsTransformValue.cardSix;

                                inputsArray[3].labels[0].style.transform = cardsTransformValue.cardTwo;

                                inputsArray[2].labels[0].style.transform = cardsTransformValue.cardOne;

                                break;

                            case 1:
                                inputsArray[3].labels[0].style.transform = cardsTransformValue.cardThree;
                                inputsArray[4].labels[0].style.transform = cardsTransformValue.cardFour;

                                inputsArray[5].labels[0].style.transform = cardsTransformValue.cardFive;
                                inputsArray[0].labels[0].style.transform = cardsTransformValue.cardSix;

                                inputsArray[2].labels[0].style.transform = cardsTransformValue.cardTwo;

                                inputsArray[1].labels[0].style.transform = cardsTransformValue.cardOne;
                                break;

                            default:
                                inputsArray[2].labels[0].style.transform = cardsTransformValue.cardThree;
                                inputsArray[3].labels[0].style.transform = cardsTransformValue.cardFour;

                                inputsArray[4].labels[0].style.transform = cardsTransformValue.cardFive;
                                inputsArray[5].labels[0].style.transform = cardsTransformValue.cardSix;

                                inputsArray[1].labels[0].style.transform = cardsTransformValue.cardTwo;

                                inputsArray[0].labels[0].style.transform = cardsTransformValue.cardOne;
                        }
                    }
                })
            })
        }
        moveTopCarossel()

        function showGivetDrpdown() {
            const givetButton = document.querySelector('.givet');
            const givetDropdown = document.querySelector('.givet-dropdown');

            givetButton.addEventListener('click', () => {
                givetDropdown.classList.toggle('disabled')
            })
        }

        showGivetDrpdown();

        function toggleVideoBackgroundVolume() {
            const videoBackground = document.querySelector('.js-video-background');
            const toggleVolumeButtom = document.querySelector('.js-toggle-volume-button');


            toggleVolumeButtom.addEventListener('click', () => {
                videoBackground.muted = videoBackground.muted ? false : true;

                if (!videoBackground.muted) {
                    interval = soundEffectAnimation();

                    soundLine.style.width = '100%';
                } else {
                    clearInterval(interval);

                    soundLine.style.width = '130%';
                    soundLine.style.cursor = 'pointer';

                    soundLine.addEventListener('click', () => {
                        soundLine.style.width = '100%';
                        toggleVolumeButtom.style.display = 'flex';
                    })
                }

                videoBackground.muted ?
                    toggleVolumeButtom.innerHTML =
                    `<i class="feather icon-feather-volume-1 icon-small text-dark-gray"></i>
                    Ativar som` :
                    toggleVolumeButtom.innerHTML =
                    `
                    <i class="feather icon-feather-volume-x icon-small text-dark-gray"></i>
                    Desativar som
                    `

            })

            console.log(videoBackground)

        }

        toggleVideoBackgroundVolume();

        function soundEffectAnimation() {
            const poly = document.querySelector('svg');

            let interval = setInterval(() => {
                let line1X = Math.floor(Math.random() * 9);
                let line1Y = Math.floor(Math.random() * 9);

                let line2X = Math.floor(Math.random() * 9);
                let line2Y = Math.floor(Math.random() * 3);


                let line3X = Math.floor(Math.random() * 9);
                let line3Y = Math.floor(Math.random() * 9);

                let line4X = Math.floor(Math.random() * 9);
                let line4Y = Math.floor(Math.random() * 9);

                let line5X = Math.floor(Math.random() * 9);
                let line5Y = Math.floor(Math.random() * 9);

                let line6X = Math.floor(Math.random() * 9);
                let line6Y = Math.floor(Math.random() * 9);

                poly.innerHTML = `
                        <style type="text/css">
                            .st0{fill:none;stroke:url(#SVGID_1_);stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                            .st1{fill:none;stroke:url(#SVGID_2_);stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                        </style>
                        <defs>
                        </defs>
                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="23.1392" x2="1923.0767" y2="23.1392">
                            <stop  offset="0" style="stop-color:#583B76"/>
                            <stop  offset="0.2859" style="stop-color:#793B70"/>
                            <stop  offset="0.509" style="stop-color:#B83B65"/>
                            <stop  offset="0.6653" style="stop-color:#FF3C5A"/>
                            <stop  offset="0.804" style="stop-color:#FF8768"/>
                            <stop  offset="1" style="stop-color:#FFD976"/>
                        </linearGradient>

                        <path class="st0" d="
                            M1,21.5h1739.9
                            c3.2,0,6.2,1.7,7.8,4.5
                            l0.${line5Y},1.4
                            c0.8,1.4,2.9,1.3,3.5-0.2
                            l4.8-1${line6Y}.2
                            c0.7-1.7,3.2-1.6,3.7,0.2
                            l4.${line1X},1${line1Y}.${line1Y}
                            c0.6,1.9,3.2,2.9,3.8,0
                            l5.${line2X}-1${line1Y}
                            c0.6-1.9,3.3-1.8,3.8,0.1
                            l6.${line3X},22.${line3Y}
                            c0.6,2,3.5,1.9,3.8-0.2
                            l5.${line4X}-3${Math.floor(Math.random() * 9)}.${line3Y}
                            c0.4-2.2,3.5-2.2,3.9,0
                            l7.${line5X},4${line4Y}
                            c0.4,2.1,3.4,2.2,3.9,0.1
                            l${line6X}.7-3${line4Y}.8
                            c0.4-2,3.3-2.1,3.8-0.1
                            l5.${line5X},1${line5Y}.1
                            c0.5,1.9,3.1,2,3.8,0.1
                            l5.${line2X}-1${line5Y}.9
                            c0.5-1.5,2.5-1.8,3.5-0.5
                            l3,4.1
                            c1.3,1.7,3.3,2.8,5.5,2.8
                            c1.3,1.7,3.3,2.8,5.5,2.8
                            l79, 0
                            h75.9"
                        />
                        `;
            }, 200)

            return interval;
        }



        function swipSlider() {
            const cardContainers = Array.from(document.querySelectorAll('.card-container'));
            const sliderContainers = Array.from(document.querySelectorAll('.slider-container'));

            let pressed = false;
            let startX;
            let x;

            sliderContainers.forEach((sliderContainer, index) => {
                sliderContainer.addEventListener('mousedown', (event) => {
                    pressed = true;

                    startX = event.offsetX - cardContainers[index].offsetLeft;

                    sliderContainer.style.cursor = 'grabbing'

                    console.log(event.offsetX);
                })

                sliderContainer.addEventListener('mouseenter', () => {
                    sliderContainer.style.cursor = 'grab'
                })

                window.addEventListener('mouseup', () => {
                    pressed = false;
                })

                sliderContainer.addEventListener('mouseup', () => {
                    sliderContainer.style.cursor = 'grab'
                })

                sliderContainer.addEventListener('mousemove', (event) => {
                    if (!pressed) return;

                    event.preventDefault();

                    x = event.offsetX;

                    cardContainers[index].style.left = `${x - startX}px`;

                    checkBoudary()
                })


                function checkBoudary() {
                    let outer = sliderContainer.getBoundingClientRect();
                    let inner = cardContainers[index].getBoundingClientRect();

                    if (parseInt(cardContainers[index].style.left) > 0) {
                        cardContainers[index].style.left = '0px'
                    } else if (inner.right < outer.right) {
                        cardContainers[index].style.left = `-${inner.width - outer.width}px`
                    }

                    console.log(inner.right, outer.right, 'estão aqui')

                }
            })



        }

        swipSlider()



        function movePartnerCards() {
            const nextButton = document.querySelector('.next-button');
            const prevButton = document.querySelector('.prev-button');

            const partnerCards = Array.from(document.querySelectorAll('.js-partners-cards'));

            let currentPartnerCard;

            partnerCards.forEach((partnersCard, index) => {
                partnersCard.addEventListener('change', () => {
                    if (partnersCard.checked) {

                        switch (index) {
                            case 0:
                                console.log(partnerCards[1].labels[0])
                                partnerCards[1].labels[0].style.transform = 'translateX(80%) scale(0.7)';
                                partnerCards[2].labels[0].style.transform = 'translateX(-80%) scale(0.7)';
                                partnerCards[0].labels[0].style.transform = 'translateX(0%) scale(1)';

                                break;

                            case 1:
                                console.log(partnerCards[0].labels[0])
                                partnerCards[0].labels[0].style.transform = 'translateX(-80%) scale(0.7)';
                                partnerCards[2].labels[0].style.transform = 'translateX(80%) scale(0.7)';
                                partnerCards[1].labels[0].style.transform = 'translateX(0%) scale(1)';
                                break;


                            case 2:
                                partnerCards[0].labels[0].style.transform = 'translateX(80%) scale(0.7)';
                                partnerCards[1].labels[0].style.transform = 'translateX(-80%) scale(0.7)';
                                partnerCards[2].labels[0].style.transform = 'translateX(0%) scale(1)';
                                break;
                        }
                    }
                })
            })

            function nextPartnerCard() {
                if (partnerCards[2].checked) {
                    partnerCards[0].checked = true
                    partnerCards[1].labels[0].style.transform = 'translateX(90%) scale(0.7)';
                    partnerCards[2].labels[0].style.transform = 'translateX(-90%) scale(0.7)';
                    partnerCards[0].labels[0].style.transform = 'translateX(0%) scale(1)';
                } else if (partnerCards[1].checked) {
                    partnerCards[2].checked = true
                    partnerCards[0].labels[0].style.transform = 'translateX(90%) scale(0.7)';
                    partnerCards[1].labels[0].style.transform = 'translateX(-90%) scale(0.7)';
                    partnerCards[2].labels[0].style.transform = 'translateX(0%) scale(1)';
                } else if (partnerCards[0].checked) {
                    partnerCards[1].checked = true
                    partnerCards[0].labels[0].style.transform = 'translateX(-90%) scale(0.7)';
                    partnerCards[2].labels[0].style.transform = 'translateX(90%) scale(0.7)';
                    partnerCards[1].labels[0].style.transform = 'translateX(0%) scale(1)';
                }
            }

            nextButton.addEventListener('click', nextPartnerCard)


            function prevPartnerCard() {
                if (partnerCards[2].checked) {
                    partnerCards[1].checked = true
                    partnerCards[1].labels[0].style.transform = 'translateX(0%) scale(1)';
                    partnerCards[2].labels[0].style.transform = 'translateX(90%) scale(0.7)';
                    partnerCards[0].labels[0].style.transform = 'translateX(-90%) scale(0.7)';
                } else if (partnerCards[1].checked) {
                    partnerCards[0].checked = true
                    partnerCards[0].labels[0].style.transform = 'translateX(0%) scale(1)';
                    partnerCards[1].labels[0].style.transform = 'translateX(90%) scale(0.7)';
                    partnerCards[2].labels[0].style.transform = 'translateX(-90%) scale(0.7)';
                } else if (partnerCards[0].checked) {
                    partnerCards[2].checked = true
                    partnerCards[0].labels[0].style.transform = 'translateX(90%) scale(0.7)';
                    partnerCards[2].labels[0].style.transform = 'translateX(0%) scale(1)';
                    partnerCards[1].labels[0].style.transform = 'translateX(-90%) scale(0.7)';
                }
            }

            prevButton.addEventListener('click', prevPartnerCard)

        }

        movePartnerCards()

        const N = 300;
        const gData = [...Array(N).keys()].map(() => ({
            lat: (Math.random() - 0.5) * 180,
            lng: (Math.random() - 0.5) * 360,
            size: Math.random() / 3,
            color: ['red', 'white', 'blue', 'green'][Math.round(Math.random() * 3)]
        }));


        fetch('<?php echo $vUrlDomain;?>content/web/assets/citie.json').then(res => res.json()).then(places => {
                console.log(places)
                Globe()
                    // .globeImageUrl('')
                    .globeImageUrl('<?php echo $vUrlDomain;?>content/web/assets/earth-night.jpg')
                    // .backgroundImageUrl('//unpkg.com/three-globe/example/img/night-sky.png')
                    .labelsData(places.features)
                    .labelLat(d => d.properties.latitude)
                    .labelLng(d => d.properties.longitude)
                    .labelText(d => d.properties.name)
                    .labelSize(d => Math.sqrt(d.properties.pop_max) * 4e-4)
                    .labelDotRadius(d => Math.sqrt(d.properties.pop_max) * 4e-4)
                    .labelColor(() => '#fff')
                    .backgroundColor('#000000')
                    .labelResolution(2)
                    .width(900)
                    .enablePointerInteraction(false)
                    (document.querySelector('.mapa'))
            })
            Globe({ rotulesData: [] })(document.querySelector('.mapa'))
    </script>
