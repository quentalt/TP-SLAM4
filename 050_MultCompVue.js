Vue.component('competence', {
    props: ['titre','contenu'],
    data() {
        return {
            voirCompetence: true
        }
    },
    template: `
    <article class="message" v-show="voirCompetence">
        <div class="message-header">
        {{ titre }}
        <button type="button" @click="voirCompetence = false">x</button>
        </div>
        <div class="message-body">
        {{ contenu }}
        </div>
        </article>
    `
})

Vue.component('macompetence', {

    props: ['titre', 'contenu'],


    template: ` 
     <article class="message" v-show="macompetence">
     <div class="message-header">
        {{ titre }}
        <div class modal ="is-active">
            <div class="modal-background"></div>
            <div class="modal-content">
            <div class="box">
            <P>
            <slot> {{ contenu }}</slot>
            </P>
            </div></div></div>`
})
var app = new Vue({
    el: '#root',
    data() {
        return {
            montreDetail: true
        }

    },
})
