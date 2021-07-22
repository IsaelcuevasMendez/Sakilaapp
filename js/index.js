const hero = document.querySelector('[data-hero]')

window.addEventListener('mousemove', (e) => {
            const { clientX, clientY } = e
            const x = Math.round((clientX / window.innerWidth) * 100)
            const y = Math.round((clientY / window.innerHeight) * 100)

            hero.style.setProperty('--x', `${x}%`)
            hero.style.setProperty('--y', `${y}%`)
        }