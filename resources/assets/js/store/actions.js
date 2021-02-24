let actions = {
    createTrack({commit}, track) {
        axios.track('/api/tracks', track)
            .then(res => {
                commit('CREATE_TRACK', res.data)
            }).catch(err => {
            console.log(err)
        })

    },
    fetchTracks({commit}) {
        axios.get('/api/tracks')
            .then(res => {
                commit('FETCH_trackS', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
    deletetrack({commit}, track) {
        axios.delete(`/api/tracks/${track.id}`)
            .then(res => {
                if (res.data === 'ok')
                    commit('DELETE_TRACK', track)
            }).catch(err => {
            console.log(err)
        })
    }
}

export default actions
