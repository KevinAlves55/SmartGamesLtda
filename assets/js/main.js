'use strict'

import { getJogos, getJogosId } from './jogos.js'
import { openModal, closeModal } from './modal.js'

const CriarCard = ({id, nome, imagem, preco}) => {

    const card = document.createElement('div')

    card.innerHTML =
    `
        <div class="card">
            <img src="assets/img/${imagem}" alt="">  
            <h3>${nome}</h3>
            <span>R$ ${preco.toString().replace('.', ',')}</span>
            <button class="btn" type="button" data-id="${id}">SAIBA MAIS</button>
        </div>
    `

    return card

}

const carregarJogos = async () => {

    const container = document.getElementById('corpo-card')
    const jogos = await getJogos();
    const cards = jogos.map(CriarCard)
    container.replaceChildren(...cards)

}

const DescarregarModal = ({nome, descricao, preco, Plataformas, Lojas}) => {

    const modal = document.createElement('tb')

    modal.innerHTML =
    `
        <td>${nome}</td>
        <td>${descricao}</td>
        <td>${preco}</td>
        <td>${Plataformas}</td>
        <td>${Lojas}</td>
    `

    return modal;

}

const carregarDetalhesJogos = async ({target}) => {

    if (target.type === "button") {

        const idJogo = target.dataset.id
        const jogosDetalhes = await getJogosId(idJogo)
        const container = document.querySelector('tbody')
        const modal = jogosDetalhes.map(DescarregarModal)
        container.replaceChildren(...modal)

    }

}

const alertCompra = async () => {

    alert('Compra registrada com sucesso');

}

carregarJogos()
document.getElementById('comprar').addEventListener('click', alertCompra)
document.querySelector('#corpo-card').addEventListener('click', carregarDetalhesJogos)
document.getElementById('corpo-card').addEventListener('click', openModal);
document.getElementById('modalClose').addEventListener('click', closeModal);