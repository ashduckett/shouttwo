function SchedulingProject(id, name) {
    this.id = id;
    this.name = name;
}

function SchedulingProjectModel() {
    this.projects = {};
    this.itemAdded = new Event(this);
    this.itemRemoved = new Event(this);
    this.itemUpdated = new Event(this);
}

SchedulingProjectModel.prototype.loadProjects = function (callMeOnSuccess) {
    var _this = this;

    $.getJSON('../API.php', { method: 'get_all', type: 'SchedulingProject' }, function (data) {
         $.each(data, function (key, val) {
            _this.projects[val.data.id] = new SchedulingProject(val.data.id, val.data.name);
        });
        callMeOnSuccess();
    });
};

SchedulingProjectModel.prototype.getProjects = function () {
    return this.projects;
};

SchedulingProjectModel.prototype.getProjectById = function (id) {
    return this.projects[id];
};


SchedulingProjectModel.prototype.addItem = function (project) {
    console.log('addItem method in SchedulingProjectModel hit');
    this.projects[project.id] = project;
    this.itemAdded.notify({ item: project });
};

SchedulingProjectModel.prototype.removeProjectWithId = function (id) {
    var project = this.projects[id];
    delete this.projects[id];
    this.itemRemoved.notify({ item: project });
};

SchedulingProjectModel.prototype.updateProject = function (project) {
    this.projects[project.id] = project;
    this.itemUpdated.notify({ item: project });
};