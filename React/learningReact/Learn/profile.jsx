const user = {
    name: "Justine S. Bayron",
    imageURL: 'https://avatars.githubusercontent.com/u/70231084?v=4',
    imageSize: 90,
};

export default function Profile() {
    return (
        <>
            <h1>{user.name}</h1>
            <img className="avatar" src={user.imageURL} alt={user.imageURL} style={{width: user.imageSize, height: user.imageSize}} />
        </>
    );
};