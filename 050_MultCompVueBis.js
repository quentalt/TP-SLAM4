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

Vue.component('modal', {
    template: ` 
            <div class modal ="is-active">
            <div class="modal-background"></div>
            <div class="modal-content">
            <div class="box">
            <P>
            <slot> {{ contenu }}</slot>
            </P>
            <button class="modal-close" @click ="$emit('close')"></button>
            </div></div></div>`
})


var app = new Vue({
    el: '#root',
    data() {
        return {
            montreDetail: false,
            DetailSLAM3 : false,
            DetailSLAM4 : false,
            DetailSLAM5 : false,
        }

    },
})
