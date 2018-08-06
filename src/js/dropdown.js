import {
  TimelineMax,
  Back,
  Elastic,
  TweenLite,
  TimelineLite,
  Power4,
} from 'gsap';

export default class Dropdown {
  constructor(options = { container: '', items: '', ease: Power4 }) {
    // Dropdown animation settings
    this.visible = false;
    // this.isAnimating = false;
    //dropdown options
    if (options.container === '') {
      throw 'Please provide a valid DOM node';
    }

    this.container =
      typeof options.container === 'string'
        ? $(options.container)
        : options.container;

    this.items =
      typeof options.items === 'string' ? $(options.items) : options.items;

    this.ease = options.ease ? options.ease : Power4;

    this.init();
  }

  init() {
    this.containerHeight = this.container.outerHeight();
    this.itemsHeight = this.items.outerHeight();
    console.log('Container Height:', this.containerHeight);
    console.log('itemsHeight', this.itemsHeight);

    //Initialize timeline with details
    this.playhead = new TimelineMax({
      yoyo: true,
      paused: true,
    });

    this.playhead.fromTo(
      this.container,
      0.6,
      {
        autoAlpha: 0,
        height: 0,
        // display: 'none',
        scaleY: 0,
        rotateY: 0,
      },
      {
        autoAlpha: 1,
        height: this.containerHeight,
        display: 'block',
        scaleY: 1,
        rotateY: '45deg',
        ease: this.ease.easeOut,
      },
    );

    this.playhead.staggerFromTo(
      this.items,
      0.3,
      {
        // opacity: 0,
        transform: 'translateY(-30%) rotateY(45deg) scale(0.7)',
        autoAlpha: 0,
      },
      {
        // opacity: 1,
        transform: 'translateY(0) rotateY(0) scale(1)',
        ease: Power4.easeOut,
        autoAlpha: 1,
      },
      0.05,
      '-=0.6',
    );
  }

  show() {
    this.visible = true;
    this.playhead.play();
  }

  hide() {
    this.playhead.reverse(0.3);
    this.visible = false;
  }

  isAnimating() {
    return this.playhead.isActive();
  }

  isVisible() {
    return this.visible;
  }
}
