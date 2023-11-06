class Api {
  get (url, query) {
    return new Promise(async (resolve, reject) => {
      const params = this.removeNullValues(query)
      try {
        // const response = await fetch(`http://localhost:8080/api/${url}?${new URLSearchParams(params)}`)
        const response = await fetch(`http://localhost:3000/api/${url}`)
        resolve(await response.json())
      } catch (error) {
        reject(error)
      }
    })
  }

  removeNullValues (query) {
    const params = { ...query }
    for (const propName in params) params[propName] ?? delete params[propName]
    return params
  }
}

export default new Api()
