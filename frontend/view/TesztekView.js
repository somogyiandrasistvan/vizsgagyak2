class View {
  #szuloElem;
  #leiro;
  #katId;
  constructor(szuloElem, leiro, katId) {
    this.#szuloElem = szuloElem;
    this.#leiro = leiro;
    this.#katId = katId;

    this.#megjelenit();
    this.#kattintas();
  }

  #megjelenit() {
    let txt = "";

    for (let i = 0; i < this.#leiro.length; i++) {

        txt += "<div class='col p-3 bg-dark text-white'>" + this.#leiro[i].kerdes + "</div>";
        txt +=  '<div class="m-1 pb-1 row">'
        txt += "<div id=0 class='col p-3 bg-primary text-white'>" + this.#leiro[i].v1 + "</div>";
        txt += "<div id=1 class='col p-3 bg-primary text-white'>" + this.#leiro[i].v2 + "</div>";
        txt += '</div>'
        txt +=  '<div class="m-1 pb-1 row">'
        txt += "<div id=2 class='col p-3 bg-primary text-white'>" + this.#leiro[i].v3 + "</div>";
        txt += "<div id=3 class='col p-3 bg-primary text-white'>" + this.#leiro[i].v4 + "</div>";
        txt += '</div>'
    }

    this.#szuloElem.append(txt);
  }

  #kattintas(){
    for (let i = 0; i <= 4; i++) {
      $("#"+i).on("click", () => {
        console.log("asd")
      });
    }
  }
}

export default View;
