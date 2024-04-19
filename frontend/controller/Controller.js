import DataService from "../modell/data.js";
import Modell from "../modell/Modell.js";
import View from "../view/TesztekView.js";
import SelectView from "../view/LegorduloView.js";

class Controller {
  #urlapModell;
  #dataService;
  #kategoriaId = 1;

  constructor() {
    this.#urlapModell = new Modell();
    this.#dataService = new DataService();
    this.#getKategoria();
    this.#get(this.#kategoriaId);
    this.#kategoriaIdChange();
  }

  megjelenitKat(list, leiro) {
    new SelectView($("#kategoria"), list, leiro);
  }

  megjelenitView(list, katId) {
    new View($("#kerdes"), list, katId);
  }

  #getKategoria() {
    this.#dataService.getAxiosData(
      `http://localhost:8000/api/kategoria`,
      this.megjelenitKat,
      "asd"
    );
  }

  #get(katId) {
    this.#dataService.getAxiosData(
      `http://localhost:8000/api/tesztek`,
      this.megjelenitView,
      katId
    );
  }

  #kategoriaIdChange() {
    $(window).on("kategoriaId", (event) => {
      console.log(event.detail);
      $("#kerdes").empty();
      let kategoriaId = event.detail;
      this.#get(kategoriaId);
    });
  }
}

export default Controller;
