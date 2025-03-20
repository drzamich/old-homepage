// <![CDATA[
Array.prototype.random = function (limit) {
  if (typeof limit == "undefined" || limit < 0) limit = 1;
  else if (!limit) limit = this.length;
  for (
    var i = 0, source = this, target = new Array(), n = source.length;
    i < limit && n > 0;
    i++
  ) {
    do {
      var index = Math.random();
    } while (index == 1);
    index = Math.floor(index * n);
    target.push(source[index]);
    source[index] = source[--n];
  }
  return target;
};

document.write(
  new Array(
    // Tu wpisz kolejne elementy:

    "<h4>Opera</h4><p>Najlepsza i zarazem jedyna sensowna i porządna przeglądarka internetowa. Oczywiście darmowa.</p>",
    "<h4>Avast!</h4><p>Darmowy program antywirusowy do użytku domowego. Najlepszy w swojej klasie.</p>",
    "<h4>Winamp</h4><p>Lubisz słuchać muzyki na swoim komputerze? Ten program jest dla Ciebie!</p>",
    "<h4>HijackThis</h4><p>Szuka wirusów, które wkradły się do rejestru. Wszystko zajmuje mu kilka sekund.</p>",
    "<h4>Easy Cleaner</h4><p>Program do szybkiego przeglądania i modyfikowania zdjęć i grafiki komputerowej.</p>",
    "<h4>IrfanView</h4><p>Masz dużoo śmieci na komputerze, a nie chce Ci się ich ręcznie usuwać? Ten program zrobi to za Ciebie!</p>"
  )
    .random()
    .join("")
);
// ]]>
