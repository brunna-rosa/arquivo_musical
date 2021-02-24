let mutations = {
    CREATE_TRACK(state, track) {
        state.tracks.unshift(track)
    },
    FETCH_TRACK(state, tracks) {
        return state.tracks = tracks
    },
    DELETE_track(state, track) {
        let index = state.tracks.findIndex(item => item.id === post.id)
        state.tracks.splice(index, 1)
    }

}
export default mutations
