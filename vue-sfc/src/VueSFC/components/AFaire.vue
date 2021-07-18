<template>
	<div>
		<SaisieTexte 
			v-model="libelleNouvelleTache"
			placeholder="Nouvelle tache pour les newbies"
			@keydown.enter="ajoutTache"
		/>
		<ul v-if="listeTaches.length">
			<TacheDetaillee
				v-for="uneTache in listeTaches"
				:key="uneTache.id"
				:uneTache="uneTache"
				@suppression="supprimeTache"
			/>
		</ul>
		<p v-else>
			Plus aucune tache en cours. Vous devriez en ajouter !.
		</p>
	</div>
</template>

<script>
import SaisieTexte from './SaisieTexte.vue'
import TacheDetaillee from './TacheDetaillee.vue'

let prochaineTacheId = 1

export default {
	components: {
		SaisieTexte, TacheDetaillee
	},
  data () {
    return {
	libelleNouvelleTache: '',
    listeTaches: [
				{
					id: prochaineTacheId++,
					text: 'Apprendre Vue'
				},
				{
					id: prochaineTacheId++,
					text: 'Utiliser des composants SFC'
				},
				{
					id: prochaineTacheId++,
					text: 'Apprendre les tests unitaires'
				}
			]
    }
  },
	methods: {
		ajoutTache () {
			const trimmedText = this.libelleNouvelleTache.trim()
			if (trimmedText) {
				this.listeTaches.push({
					id: prochaineTacheId++,
					text: trimmedText
				})
				this.libelleNouvelleTache = ''
			}
		},
		supprimeTache (idAEnlever) {
			this.listeTaches = this.listeTaches.filter(uneTache => {
				return uneTache.id !== idAEnlever
			})
		}
	}
}
</script>