class Player12201 {
    constructor(place, player, city, rank,
                game1, game2, game3, game4, game5, total, mms, sos, sdos) {
        this.place = place;
        this.player = player
        this.city = city;
        this.rank = rank;
        this.game1 = game1;
        this.game2 = game2;
        this.game3 = game3;
        this.game4 = game4;
        this.game5 = game5;
        this.total = total;
        this.mms = mms;
        this.sos = sos;
        this.sdos = sdos;
    }
}

var r12201 = [];

$.ajax({
    url: '12201.txt',
    dataType: 'text',
    async: false,

    success: function (data) {
        let lines = data.split("\n");
        $.each(lines, function (n, elem) {
                let f = elem.split(",");
                let player = new Player12201(
                    f[0], f[1], f[2], f[3], f[4], f[5], f[6], f[7],
                    f[8], f[9], f[10], f[11], f[12]);
                r12201.push(player);
            }
        );
    }
});

class Player12202 {
    constructor(place, player, city, rank,
                game1, game2, game3, game4, total, mms, sos, sdos) {
        this.place = place;
        this.player = player
        this.city = city;
        this.rank = rank;
        this.game1 = game1;
        this.game2 = game2;
        this.game3 = game3;
        this.game4 = game4;
        this.total = total;
        this.mms = mms;
        this.sos = sos;
        this.sdos = sdos;
    }
}

var r12202 = [];

$.ajax({
    url: '12202.txt',
    dataType: 'text',
    async: false,

    success: function (data) {
        let lines = data.split("\n");
        $.each(lines, function (n, elem) {
                let f = elem.split(",");
                let player = new Player12202(
                    f[0], f[1], f[2], f[3], f[4], f[5], f[6], f[7],
                    f[8], f[9], f[10], f[11]);
                r12202.push(player);
            }
        );
    }
});
