var r1205 = [];

class Player1205 {
    constructor(place, player, city, rank, score,
                game1, game2, game3, game4, total, mms, sos, sdos) {
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
        this.mms = mms;
        this.sos = sos;
        this.sdos = sdos;
    }
}

$.ajax({
    url: '1205.txt',
    dataType: 'text',
    async: false,

    success: function (data) {
        let lines = data.split("\n");
        $.each(lines, function (n, elem) {
                let f = elem.split(",");
                let player = new Player1205(
                    f[0], f[1], f[2], f[3], f[4], f[5], f[6], f[7],
                    f[8], f[9], f[10], f[11], f[12]);
                r1205.push(player);
            }
        );
    }
});
