const clock = document.querySelector('.clock');
const hoursBox = document.querySelector('.clock__hand--hour');
const minutesBox = document.querySelector('.clock__hand--minute');
const secondsBox = document.querySelector('.clock__hand--second');

const setCustomProperty = (name, value) => {
    clock.style.setProperty(`--${name}`, value);
};

const setTimeVariables = (time) => {
    setCustomProperty('hours', time.getHours());
    setCustomProperty('minutes', time.getMinutes());
    setCustomProperty('seconds', time.getSeconds());
};

const setTimeLayout = (time) => {
    hoursBox.textContent = time.getHours();
    minutesBox.textContent = time.getMinutes();
    secondsBox.textContent = time.getSeconds();

    clock.setAttribute('datetime', time.toISOString());
}

const setTime = () => {
    const now = new Date();

    setTimeVariables(now);
    setTimeLayout(now);
}

setTime();
setInterval(setTime, 1000);
