var options = {
  accessibility: true,
  prevNextButtons: true,
  pageDots: true,
  setGallerySize: false,
  arrowShape: {
    x0: 10,
    x1: 60,
    y1: 50,
    x2: 60,
    y2: 45,
    x3: 15
  }
};

var carousel = document.querySelector('[data-carousel]');
var slides = document.getElementsByClassName('carousel-cell');
var flkty = new Flickity(carousel, options);

flkty.on('scroll', function () {
  flkty.slides.forEach(function (slide, i) {
    var image = slides[i];
    var x = (slide.target + flkty.x) * -1/3;
    image.style.backgroundPosition = x + 'px';
  });
});

console.clear();
// first card clicked
var curCard = document.querySelector('.current--card');
	 // when current card clicked
  	 curCard.addEventListener('click',function(){
	 var link = this.getAttribute('val');
	 window.location.href = link+".php";
	 })
const { gsap, imagesLoaded } = window;

const buttons = {
	prev: document.querySelector(".btn--left"),
	next: document.querySelector(".btn--right"),
};
const cardsContainerEl = document.querySelector(".cards__wrapper");
const appBgContainerEl = document.querySelector(".app__bg");

const cardInfosContainerEl = document.querySelector(".info__wrapper");

buttons.next.addEventListener("click", () => swapCards("right"));

buttons.prev.addEventListener("click", () => swapCards("left"));

function swapCards(direction) {
	const currentCardEl = cardsContainerEl.querySelector(".current--card");
	const next_1_CardEl = cardsContainerEl.querySelector(".next-1--card");
	const next_2_CardEl = cardsContainerEl.querySelector(".next-2--card");
	const next_3_CardEl = cardsContainerEl.querySelector(".next-3--card");

	const currentBgImageEl = appBgContainerEl.querySelector(".current--image");
	const next_1_BgImageEl = appBgContainerEl.querySelector(".next-1--image");
	const next_2_BgImageEl = appBgContainerEl.querySelector(".next-2--image");
	const next_3_BgImageEl = appBgContainerEl.querySelector(".next-3--image");

	changeInfo(direction);
	swapCardsClass();

	removeCardEvents(currentCardEl);

	function swapCardsClass() {
		currentCardEl.classList.remove("current--card");
		next_1_CardEl.classList.remove("next-1--card");
		next_2_CardEl.classList.remove("next-2--card");
		next_3_CardEl.classList.remove("next-3--card");

		currentBgImageEl.classList.remove("current--image");
		next_1_BgImageEl.classList.remove("next-1--image");
		next_2_BgImageEl.classList.remove("next-2--image");
		next_3_BgImageEl.classList.remove("next-3--image");

		currentCardEl.style.zIndex = "50";
		currentBgImageEl.style.zIndex = "-3";

		if (direction === "right") {
			next_3_CardEl.style.zIndex = "20";
			next_2_CardEl.style.zIndex = "25";
			next_1_CardEl.style.zIndex = "30";

			next_1_BgImageEl.style.zIndex = "-1";
			next_2_BgImageEl.style.zIndex = "-2";

			currentCardEl.classList.add("next-3--card");
			next_3_CardEl.classList.add("next-2--card");
			next_2_CardEl.classList.add("next-1--card");
			next_1_CardEl.classList.add("current--card");

			currentBgImageEl.classList.add("next-3--image");
			next_3_BgImageEl.classList.add("next-2--image");
			next_2_BgImageEl.classList.add("next-1--image");
			next_1_BgImageEl.classList.add("current--image");
		} else if (direction === "left") {
			next_3_CardEl.style.zIndex = "30";
			next_2_CardEl.style.zIndex = "25";
			next_1_CardEl.style.zIndex = "20";

			next_3_BgImageEl.style.zIndex = "-1";
			next_2_BgImageEl.style.zIndex = "-2";

			currentCardEl.classList.add("next-1--card");
			next_3_CardEl.classList.add("current--card");
			next_2_CardEl.classList.add("next-3--card");
			next_1_CardEl.classList.add("next-2--card");

			currentBgImageEl.classList.add("next-1--image");
			next_3_BgImageEl.classList.add("current--image");
			next_2_BgImageEl.classList.add("next-3--image");
			next_1_BgImageEl.classList.add("next-2--image");
		}
	}
	  var curCard = document.querySelector('.current--card');
	 // when current card clicked
  	 curCard.addEventListener('click',function(){
	 var link = this.getAttribute('val');
	 window.location.href = link+".php";
	 })
}

function changeInfo(direction) {
	let currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
	let next_1_InfoEl = cardInfosContainerEl.querySelector(".next-1--info");
	let next_2_InfoEl = cardInfosContainerEl.querySelector(".next-2--info");
	let next_3_InfoEl = cardInfosContainerEl.querySelector(".next-3--info");

	gsap.timeline()
		.to([buttons.prev, buttons.next], {
		duration: 0.2,
		opacity: 0.5,
		pointerEvents: "none",
	})
		.to(
		currentInfoEl.querySelectorAll(".text"),
		{
			duration: 0.4,
			stagger: 0.1,
			translateY: "-120px",
			opacity: 0,
		},
		"-="
	)
		.call(() => {
		swapInfosClass(direction);
	})
		.call(() => initCardEvents())
		.fromTo(
		direction === "right"
		? next_1_InfoEl.querySelectorAll(".text")
		: next_3_InfoEl.querySelectorAll(".text"),
		{
			opacity: 0,
			translateY: "40px",
		},
		{
			duration: 0.4,
			stagger: 0.1,
			translateY: "0px",
			opacity: 1,
		}
	)
		.to([buttons.prev, buttons.next], {
		duration: 0.2,
		opacity: 1,
		pointerEvents: "all",
	});

	function swapInfosClass() {
		currentInfoEl.classList.remove("current--info");
		next_1_InfoEl.classList.remove("next-1--info");
		next_2_InfoEl.classList.remove("next-2--info");
		next_3_InfoEl.classList.remove("next-3--info");

		if (direction === "right") {
			currentInfoEl.classList.add("next-3--info");
			next_1_InfoEl.classList.add("current--info");
			next_2_InfoEl.classList.add("next-1--info");
			next_3_InfoEl.classList.add("next-2--info");
		} else if (direction === "left") {
			currentInfoEl.classList.add("next-1--info");
			next_1_InfoEl.classList.add("next-2--info");
			next_2_InfoEl.classList.add("next-3--info");
			next_3_InfoEl.classList.add("current--info");
		}
	}
}

function updateCard(e) {
	const card = e.currentTarget;
	const box = card.getBoundingClientRect();
	const centerPosition = {
		x: box.left + box.width / 2,
		y: box.top + box.height / 2,
	};
	let angle = Math.atan2(e.pageX - centerPosition.x, 0) * (35 / Math.PI);
	gsap.set(card, {
		"--current-card-rotation-offset": `${angle}deg`,
	});
	const currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
	gsap.set(currentInfoEl, {
		rotateY: `${angle}deg`,
	});
	const currentDesc = currentInfoEl.querySelector(".description");
	gsap.set(currentDesc, {
		display: `block`,
	});
}

function resetCardTransforms(e) {
	const card = e.currentTarget;
	const currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
	gsap.set(card, {
		"--current-card-rotation-offset": 0,
	});
	gsap.set(currentInfoEl, {
		rotateY: 0,
	});
	const currentDesc = currentInfoEl.querySelector(".description");
	gsap.set(currentDesc, {
		display: `none`,
	});
}

function initCardEvents() {
	const currentCardEl = cardsContainerEl.querySelector(".current--card");
	currentCardEl.addEventListener("pointermove", updateCard);
	currentCardEl.addEventListener("pointerout", (e) => {
		resetCardTransforms(e);
	});
}

initCardEvents();

function removeCardEvents(card) {
	card.removeEventListener("pointermove", updateCard);
}

function init() {

	let tl = gsap.timeline();

	tl.to(cardsContainerEl.children, {
		delay: 0.15,
		duration: 0.5,
		stagger: {
			ease: "power4.inOut",
			from: "right",
			amount: 0.1,
		},
		"--card-translateY-offset": "0%",
	})
		.to(cardInfosContainerEl.querySelector(".current--info").querySelectorAll(".text"), {
		delay: 0.5,
		duration: 0.4,
		stagger: 0.1,
		opacity: 1,
		translateY: 0,
	})
		.to(
		[buttons.prev, buttons.next],
		{
			duration: 0.4,
			opacity: 1,
			pointerEvents: "all",
		},
		"-=0.4"
	);
}

const waitForImages = () => {
	const images = [...document.querySelectorAll("img")];
	const totalImages = images.length;
	let loadedImages = 0;
	const loaderEl = document.querySelector(".loader span");

	gsap.set(cardsContainerEl.children, {
		"--card-translateY-offset": "100vh",
	});
	gsap.set(cardInfosContainerEl.querySelector(".current--info").querySelectorAll(".text"), {
		translateY: "40px",
		opacity: 0,
	});
	gsap.set([buttons.prev, buttons.next], {
		pointerEvents: "none",
		opacity: "0",
	});

	images.forEach((image) => {
		imagesLoaded(image, (instance) => {
			if (instance.isComplete) {
				loadedImages++;
				let loadProgress = loadedImages / totalImages;

				gsap.to(loaderEl, {
					duration: 1,
					scaleX: loadProgress,
					backgroundColor: `hsl(${loadProgress * 120}, 100%, 50%`,
				});

				if (totalImages == loadedImages) {
					gsap.timeline()
						.to(".loading__wrapper", {
						duration: 0.8,
						opacity: 0,
						pointerEvents: "none",
					})
						.call(() => init());
				}
			}
		});
	});
};
waitForImages();
