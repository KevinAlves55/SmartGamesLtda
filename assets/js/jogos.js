'use strict'

const getJogos = async () => {

    const url = 'http://localhost/SmartGamesLtda/API/jogos'
    const response = await fetch(url)
    const dados = await response.json()
    return dados;

}

const getJogosId = async (id) => {

    const url = `http://localhost/SmartGamesLtda/API/jogos/${id}`
    const response = await fetch(url)
    const dados = await response.json()
    return dados;

}

export {
    getJogos,
    getJogosId
}