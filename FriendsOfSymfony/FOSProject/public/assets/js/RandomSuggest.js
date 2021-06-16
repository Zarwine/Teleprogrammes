class RandomSuggest {
    constructor() {
        this.buttons = document.querySelectorAll(".random_btn")

        this.initButtons()
    }

    initButtons() {
        this.buttons.forEach(button => {
            button.addEventListener("click", this.suggest, button.name)
        });
    }

    suggest() {
        event.preventDefault()
        let suggest = randomSuggest.getRandom(this.name)
    }

    getRandom = async function (category) {


        let response = await fetch("https://localhost:8000/horoscope/suggest/" + category)
        let suggest = await response.text()

        let textArea = document.getElementById(category)

        textArea.innerText = suggest
    }
}

let randomSuggest = new RandomSuggest