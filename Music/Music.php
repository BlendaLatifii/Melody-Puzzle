<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Music.css" />
</head>
<style>
 .container{
    background: #ada7a7;
    padding: 10px;
    border-radius: 50px;
    width: 33%;
    display: flex;
    justify-content: right;
    margin-left: 33%;
    margin-bottom: 30px;
    margin-top: 20px;
 }

 input{
    background: none;
    color: white;
    width: 50%;
    min-width: 381px;
    padding: 50px -3px;
    border-radius: 24px;
    font-size: 16px;
    border: 0px;
    outline: none;
 }

 .search-bar [list]::-webkit-list-button,
.search-bar [list]::-webkit-calendar-picker-indicator {
  display: none !important;
}

 .b{
    width: 60px;
    height: 30px;
    border-radius: 10px;
    background: #2f3640;
    color: white;
 }

 .container:hover .b{
    background: black;
 }


 @media only screen and (max-width: 908px){
input {
    min-width: 100px;
}
 }

 @media only screen and (max-width: 1250px){
input {
    min-width: 330px;
}
 }

 @media only screen and (max-width: 1200px){
input {
    min-width: 300px;
    font-size: 12px;
}
 }

 @media only screen and (max-width: 1000px){
input {
    min-width: 220px;
}
h1{
    font-size: 20px;
}
.container{
    background: #ada7a7;
    padding: 5px;
    border-radius: 50px;
    width: 30%;
    display: flex;
    justify-content: right;
    margin-left: 33%;
    margin-bottom: 30px;
    margin-top: 20px;
 }
 .b{
    width: 50px;
    height: 20px;
    border-radius: 10px;
    background: #2f3640;
    color: white;
 }

 }

</style>

<body>
    <header>
        <?php
        include('../header/header.php');
        include('./songsRepository.php');
        $repo = new SongsRepository();
        $songs = $repo->getAllSongs();
        ?>
    </header>
    <main>
    <h1 style="display:flex;justify-content:center;margin-top:20px;">Looking for something specific?</h1>
       <div class="container">
        <input type="search" placeholder="Search..." list="search-suggestions" autocomplete="off">
        <button class="b">
            <i class="material-icons">search</i>
        </button>
        <datalist id="search-suggestions">
        <option value="Tayna">
        <option value="Capital T">
        <option value="Vinz">
      </datalist>
       </div>

        <h1 id="releases">On top this week</h1>
        <div class="PostSlide">
            <div class="innerContainer active">
                <div class="slider">
                    <?php
                    foreach ($songs as $song) {
                    ?>
                        <div class="slide">
                            <div onclick="changeRoute('<?php echo $song['Id'] ?>')" class="song">
                                <a onclick="changeRoute('<?php echo $song['Id'] ?>')"><img src="../Images/<?php echo $song['Photo'] ?>" alt="Tayna" class="img" /></a>
                                <h4><?php echo $song['artist'] ?></h4>
                                <p><?php echo $song['title'] ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="handles">
                    <span class="prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.0001 19.92L8.48009 13.4C7.71009 12.63 7.71009 11.37 8.48009 10.6L15.0001 4.07999" stroke="rgb(55 65 81/1)" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <span class="next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.99991 19.92L15.5199 13.4C16.2899 12.63 16.2899 11.37 15.5199 10.6L8.99991 4.07999" stroke="rgb(55 65 81/1)" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
                <div class="dots">
                </div>
            </div>
        </div>
        <div class="latest hidden">
            <div class="Artists">
                <?php
                foreach ($songs as $song) {
                ?>
                    <div class="slide">
                        <div class="song" onclick="changeRoute('<?php echo $song['Id'] ?>')">
                            <a class="img" onclick="changeRoute('<?php echo $song['Id'] ?>')"><img src="../Images/<?php echo $song['Photo'] ?>" /></a>
                            <h4><?php echo $song['artist'] ?></h4>
                            <p><?php echo $song['title'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

    </main>
    <div style="display:flex;align-items:center;justify-content: center;">
        <button class="see-all-button" onclick="seeAll()">See All</button>
    </div>
    <br>
    <footer>
        <?php
        include('../footer/footer.php');
        ?>
    </footer>
    <script>
        function changeRoute(value) {
            element = document.createElement('a');
            element.href = '/Melody-puzzle/Music2/Music2.php?id=' + value;
            document.body.appendChild(element);
            localStorage.setItem('music-key', value);
            element.click();
        }

        function seeAll() {

            let carosel = document.getElementsByClassName("PostSlide")[0];
            let list = document.getElementsByClassName("latest")[0];
            let seeAllButton = document.getElementsByClassName("see-all-button")[0];

            if (carosel.classList.contains("hidden")) {
                carosel.classList.remove("hidden")
                list.classList.add("hidden");
                list.classList.remove("flex");
                seeAllButton.textContent = "See All";

            } else {
                carosel.classList.add("hidden")
                list.classList.remove("hidden");
                list.classList.add("flex");
                seeAllButton.textContent = "See less";
            }
        }
        var autoplayIntervalInSeconds = 3;


        class PostSlider {

            constructor(containerElement, autoplayIntervalInSeconds) {
                this.container = containerElement;
                if (!this.container) {
                    throw new Error(`Container not found.`);
                }

                this.slider = this.container.querySelector('.slider');
                this.prevBtn = this.container.querySelector('.handles .prev');
                this.nextBtn = this.container.querySelector('.handles .next');

                this.sLiderWidth = this.slider.clientWidth;
                this.oneSLideWidth = this.container.querySelector('.slide:nth-child(2)').clientWidth;
                this.sildesPerPage = Math.trunc(this.sLiderWidth / this.oneSLideWidth);
                this.slideMargin = ((this.sLiderWidth - (this.sildesPerPage * this.oneSLideWidth)) / (this.sildesPerPage * 2)).toFixed(5);
                this.changeSlidesMargins();

                this.dots = this.container.querySelectorAll('.dots span');
                this.bindDotClickHandlers();

                this.makeSliderScrollable();
                this.prevBtn.addEventListener('click', () => this.prevSlider());
                this.nextBtn.addEventListener('click', () => this.nextSlider());

                this.createDots();
                this.setActiveDotByScroll();

                this.autoplayInterval = null;
                this.autoplayDelay = autoplayIntervalInSeconds * 1000;

                this.startAutoplay()
                this.container.addEventListener('mouseenter', () => this.pauseAutoplay());
                this.container.addEventListener('mouseleave', () => this.startAutoplay());

                return this;
            }
            changeSlidesMargins() {
                const slides = this.container.querySelectorAll('.slide');
                if (this.oneSLideWidth * 2 > this.sLiderWidth) {
                    this.slideMargin = 1;
                    this.oneSLideWidth = this.oneSLideWidth + (this.sLiderWidth - this.oneSLideWidth - 2);
                    slides.forEach(slide => {
                        slide.style.margin = "0 " + this.slideMargin + "px";
                        slide.style.minWidth = this.oneSLideWidth + "px";
                    });

                } else {
                    slides.forEach(slide => {
                        slide.style.margin = "0 " + this.slideMargin + "px";
                    });
                }
            }

            scrollToPosition(position, smooth = true) {
                const currentPosition = this.slider.scrollLeft;
                const newPosition = currentPosition + position;

                this.slider.scrollTo({
                    top: 0,
                    left: newPosition,
                    behavior: smooth ? 'smooth' : 'instant'
                });

                setTimeout(() => {
                    this.snapToNearestSlide();
                }, 300);
            }
            scrollWithDots(pos) {
                this.slider.scrollTo({
                    top: 0,
                    left: pos,
                    behavior: "smooth"
                });
            }

            handleDotClick(index) {
                const position = index * (this.slider.getBoundingClientRect()['width']);
                this.scrollWithDots(position);
            }

            changeActiveDot(i) {
                for (let j = 0; j < this.dots.length; j++) {
                    this.dots[j].classList.remove('active');
                }
                this.dots[i].classList.add('active');
            }


            bindDotClickHandlers() {
                for (let i = 0; i < this.dots.length; i++) {
                    this.dots[i].addEventListener('click', () => {
                        this.handleDotClick(i);
                    });
                }
            }
            snapToNearestSlide() {

                const currentPosition = this.slider.scrollLeft;
                const nearestLeftScroll = Math.round(currentPosition / (this.oneSLideWidth + (this.slideMargin * 2))) * (this.oneSLideWidth + (this.slideMargin * 2));
                this.slider.scrollTo({
                    left: nearestLeftScroll,
                    behavior: 'smooth'
                });
            }
            makeSliderScrollable() {
                let isDragging = false;
                let startPosition;
                let startScrollPosition;

                this.slider.addEventListener('mousedown', (event) => startDrag(event));
                this.slider.addEventListener('touchstart', (event) => startDrag(event));

                const startDrag = (event) => {
                    isDragging = true;
                    startPosition = event.clientX || event.touches[0].clientX;
                    startScrollPosition = this.slider.scrollLeft;

                    document.addEventListener('mousemove', drag);
                    document.addEventListener('touchmove', drag);
                    document.addEventListener('mouseup', endDrag);
                    document.addEventListener('touchend', endDrag);
                };

                const drag = (event) => {
                    if (isDragging) {
                        const currentX = event.clientX || event.touches[0].clientX;
                        const deltaX = currentX - startPosition;
                        this.slider.scrollLeft = startScrollPosition - deltaX;
                    }
                };

                const endDrag = () => {
                    if (isDragging) {
                        isDragging = false;
                        const currentPosition = this.slider.scrollLeft;
                        const nearestLeftScroll = Math.round(currentPosition / (this.oneSLideWidth + (this.slideMargin * 2))) * (this.oneSLideWidth + (this.slideMargin * 2));
                        this.slider.scrollTo({
                            left: nearestLeftScroll,
                            behavior: 'smooth'
                        });

                        document.removeEventListener('mousemove', drag);
                        document.removeEventListener('touchmove', drag);
                        document.removeEventListener('mouseup', endDrag);
                        document.removeEventListener('touchend', endDrag);
                    }
                };
            }

            setActiveDotByScroll() {
                this.dots = this.container.querySelectorAll('.dots span');
                this.slider.addEventListener('scroll', () => {
                    const scrollLeft = this.slider.scrollLeft;
                    const currentIndex = Math.trunc((Math.abs(scrollLeft) + 2) / this.slider.clientWidth);
                    for (let i = 0; i < this.dots.length; i++) {
                        this.dots[i].classList.remove('active');
                    }

                    this.dots[currentIndex].classList.add('active');

                    this.prevBtn.style.opacity = Math.abs(scrollLeft) < 1 ? '0' : '1';
                    this.nextBtn.style.opacity = Math.abs(scrollLeft) + 2 >= this.slider.scrollWidth - this.slider.clientWidth ? '0' : '1';
                });
            }


            nextSlider() {
                const totalWidth = this.slider.scrollWidth;
                const currentScroll = this.slider.scrollLeft;
                const nextScroll = currentScroll + this.oneSLideWidth + (this.slideMargin * 2);

                if (nextScroll + this.slider.clientWidth > totalWidth) {
                    this.slider.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                } else {
                    this.scrollToPosition(this.oneSLideWidth + (this.slideMargin * 2));
                }
            }

            prevSlider() {
                const currentScroll = this.slider.scrollLeft;
                const prevScroll = currentScroll - (this.oneSLideWidth + (this.slideMargin * 2));

                if (prevScroll < 0) {
                    this.slider.scrollTo({
                        left: this.slider.scrollWidth - this.slider.clientWidth,
                        behavior: 'smooth'
                    });
                } else {
                    this.scrollToPosition(-1 * (this.oneSLideWidth + (this.slideMargin * 2)));
                }
            }

            createDots() {
                const dotCount = Math.floor(this.slider.scrollWidth / this.slider.clientWidth);
                const dotsContainer = this.container.querySelector('.dots');
                dotsContainer.innerHTML = '';
                for (let i = 0; i < dotCount; i++) {
                    const dot = document.createElement('span');
                    dot.addEventListener('click', () => {
                        this.handleDotClick(i);
                    });

                    if (i === 0) {
                        dot.classList.add('active');
                    }

                    dotsContainer.appendChild(dot);
                }
            }

            startAutoplay() {
                this.autoplayInterval = setInterval(() => {
                    this.nextSlider();
                }, this.autoplayDelay);
            }

            pauseAutoplay() {
                clearInterval(this.autoplayInterval);
            }
        }


        window.addEventListener('load', function() {
            var container = document.querySelector('.PostSlide .innerContainer');
            new PostSlider(container, 3);
        })
        
    </script>
</body>

</html>