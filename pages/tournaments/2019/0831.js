class Player0831 {
    constructor(place, number, country, player,
                game1, game2, game3, game4,
                game5, game6,
                total, sos, sosos) {
        this.place = place;
        this.number = number;
        this.player = player
        this.country = country;
        this.country_flag = Country.cf_map_m.get(country);
        this.game1 = game1;
        this.game2 = game2;
        this.game3 = game3;
        this.game4 = game4;
        this.game5 = game5;
        this.game6 = game6;
        this.total = total;
        this.sos = sos;
        this.sosos = sosos;
    }
}

var r0831 = [];

$.get('0831.txt', function (data) {
    let lines = data.split("\n");
    $.each(lines, function (n, elem) {
            let f = elem.split(",");
            let player = new Player0831(
                f[0], f[1], f[2], f[3], f[4], f[5], f[6], f[7], f[8], f[9], f[10],
                f[11], f[12]);
            r0831.push(player);
        }
    );
});