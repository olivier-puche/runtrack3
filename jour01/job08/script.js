function sommenombrespremiers(nb1, nb2) {
    for (let i = 2; i < nb1; i++) {
        if (nb1 % i == 0) return false;
    }
    for (let k = 2; k < nb2; k++) {
        if (nb2 % k == 0) return false;
    }

    return nb1 + nb2;
}

console.log(sommenombrespremiers(10, 7));