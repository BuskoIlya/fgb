class Player10251 {
    constructor(place, player, city, rank, score,
                game1, game2, game3, game4, total, sos, sdos, sosos) {
        this.place = place;
        this.player = player
        this.city = city;
        this.rank = rank;
        this.score = score;
        this.game1 = game1;
        this.game2 = game2;
        this.game3 = game3;
        this.game4 = game4;
        this.total = total;
        this.sos = sos;
        this.sdos = sdos;
        this.sosos = sosos;
    }
}

class Player10252 {
    constructor(place, player, city, rank, score,
                game1, game2, game3, total, sos, sdos, sosos) {
        this.place = place;
        this.player = player
        this.city = city;
        this.rank = rank;
        this.score = score;
        this.game1 = game1;
        this.game2 = game2;
        this.game3 = game3;
        this.total = total;
        this.sos = sos;
        this.sdos = sdos;
        this.sosos = sosos;
    }
}

var r10251 = [];

$.get('10251.txt', function (data) {
    let lines = data.split("\n");
    $.each(lines, function (n, elem) {
            let f = elem.split(",");
            let player = new Player10251(
                f[0], f[1], f[2], f[3], f[4], f[5], f[6], f[7],
                f[8], f[9], f[10], f[11], f[12]);
            r10251.push(player);
        }
    );
});

var r10252 = [];

$.get('10252.txt', function (data) {
    let lines = data.split("\n");
    $.each(lines, function (n, elem) {
            let f = elem.split(",");
            let player = new Player10252(
                f[0], f[1], f[2], f[3], f[4], f[5], f[6], f[7],
                f[8], f[9], f[10], f[11]);
            r10252.push(player);
        }
    );
});

var r10253 = [];

$.get('10253.txt', function (data) {
    let lines = data.split("\n");
    $.each(lines, function (n, elem) {
            let f = elem.split(",");
            let player = new Player10252(
                f[0], f[1], f[2], f[3], f[4], f[5], f[6], f[7],
                f[8], f[9], f[10], f[11]);
            r10253.push(player);
        }
    );
});

var r10254 = [];

$.get('10254.txt', function (data) {
    let lines = data.split("\n");
    $.each(lines, function (n, elem) {
            let f = elem.split(",");
            let player = new Player10252(
                f[0], f[1], f[2], f[3], f[4], f[5], f[6], f[7],
                f[8], f[9], f[10], f[11]);
            r10254.push(player);
        }
    );
});