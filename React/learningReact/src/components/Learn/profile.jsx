const user = {
    name: "Justine S. Bayron",
    imageURL: 'https://avatars.githubusercontent.com/u/70231084?v=4',
    imageSize: 90,
};

export default function Profile({name}) {
    return (
        <>
            <h1>{name}</h1>
            <img className="rounded-full" src={user.imageURL} alt={user.imageURL} style={{width: user.imageSize, height: user.imageSize}} />
        </>
    );
};