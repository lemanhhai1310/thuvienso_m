console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

document.addEventListener('uikit:init', () => {
    // do something
    console.log("uikit:init")
})

const f = document.querySelector.bind(document);
const ff = document.querySelectorAll.bind(document);
const footer = {
    render: function () {
        const app = f('.app');
        const footer__navbar = f('.footer__navbar');
        const danhmucchitiet__fillter__section = f('.danhmucchitiet__fillter__section');

        if (footer__navbar){
            let h = footer__navbar.offsetHeight + 'px';
            app.style.paddingBottom = h;
            console.log('paddingBottom App', h);
        }

        if (danhmucchitiet__fillter__section) {
            let h = danhmucchitiet__fillter__section.offsetHeight + 'px';
            app.style.paddingBottom = h;
            console.log('paddingBottom App', h);
        }
    },
    start: function () {
        this.render();
    }
}

window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');
    footer.start();
});