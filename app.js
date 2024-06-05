const tl = gsap.timeline({ defaults: { ease: "power1.out" } });


tl.to(".text", { y: "0%", duration: 0.7, stagger: 0.25 });
tl.fromTo("header", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.to(".baselinetext", { x: "0%", duration: 0.5, stagger: 0.25 });