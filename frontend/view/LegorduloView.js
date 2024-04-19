class SelectView {
  #szuloElem;
  #list;
  #leiro;
  #kategoriaId;

  constructor(szuloElem, list, leiro) {
    this.#szuloElem = szuloElem;
    this.#list = list;
    this.#leiro = leiro;

    this.#letrehozz();
    this.#kategoria();
  }

  #letrehozz() {
    let txt = "";
    txt += "<form>";
    txt += "<select class='form-select' id=kategoria>";
    for (let i = 0; i < this.#list.length; i++) {
      txt += `<option value=${this.#list[i].id}>${
        this.#list[i].kategorianev
      }</option>`;
    }
    this.#szuloElem.append(txt);
  }

  #kategoria() {
    $("#kategoria").on("change", () => {
        this.#kategoriaId = $("#kategoria option:selected").val()
        console.log(this.#kategoriaId)
        this.#esemenyTrigger("kategoriaId");
    });
  }

  #esemenyTrigger(esemenyNev){
    const E = new CustomEvent(esemenyNev, { detail:  this.#kategoriaId});
    window.dispatchEvent(E);
  }


}

export default SelectView;
